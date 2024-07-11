<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use kornrunner\Keccak;
use Elliptic\EC;
use App\Models\Nonce;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

//request to fetch message
class Web3LoginController extends Controller
{
    public function nonce(Request $request, $type = 'register')
    {
        if ($type === 'register') {
            $slug = $request->eth_address.'-register-'.str_slug(env('APP_KEY'));
            $tp = 'register';
        } else {
            $slug = $request->eth_address.'-login-'.str_slug(env('APP_KEY'));
            $tp = 'login';
        }
        $make = Hash::make($slug);
        $nonce = Nonce::create([
            'nonce' => $make,
            'content' => $slug,
            'type' => $tp
        ]);
        if ($nonce) {
            return response()->json([
                'nonce' => $nonce->nonce,
            ]);
        }
    }
    public function verifySignature($signature, $address, $type = 'register')
    {
        $content = $address.'-'.$type.'-'.str_slug(env('APP_KEY'));
        $nonce = Nonce::where('content', $content)->where('type', $type)->latest()->first();
        if ($nonce) {
            $hash = Keccak::hash(sprintf("\x19Ethereum Signed Message:\n%s%s", strlen($nonce->nonce), $nonce->nonce), 256);
            $sign = [
                'r' => substr($signature, 2, 64),
                's' => substr($signature, 66, 64),
            ];
            $recid = ord(hex2bin(substr($signature, 130, 2))) - 27;

            if ($recid != ($recid & 1)) {
                return false;
            }

            $pubkey = (new EC('secp256k1'))->recoverPubKey($hash, $sign, $recid);
            $derived_address = '0x' . substr(Keccak::hash(substr(hex2bin($pubkey->encode('hex')), 1), 256), 24);
            $nonce->delete();
            return (Str::lower($address) === $derived_address);
        }
    }
    public function register(Request $request)
    {
        // The register method are here.
        $verify = $this->verifySignature($request->signature, $request->eth_address, 'register');
        if ($verify) {
            $user = User::create([
                'eth_address' => $request->eth_address
            ]);
            $token = $user->createToken('api')->plainTextToken;
            return $this->success_response([
                'message' => 'Registration successful',
                'token' => $token,
                'address' => $request->eth_address,
            ]);
        } else {
            Nonce::where('content', $request->address.'-register')->where('type', 'register')->delete();
            return response()->json([
               'message' => 'Invalid address or signature'
            ], 400);
        }
    }

    public function login(Request $request)
    {
        // The login method are here
        $verify = $this->verifySignature($request->signature, $request->eth_address, 'login');
        if ($verify) {
            $user = User::where('eth_address', $request->eth_address)->first();
            if ($user) {
                $token = $user->createToken('api')->plainTextToken;
                return response()->json([
                    'message' => 'Login successful',
                    'token' => $token,
                    'address' => $request->eth_address,
                ]);
            }
        } else {
            Nonce::where('content', $request->address.'-register')->where('type', 'register')->delete();
            return response()->json([
               'message' => 'There is no user with that wallet address'
            ], 400);
        }
    }
    }
