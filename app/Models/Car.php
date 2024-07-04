<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{

    
    protected $primarykey = 'CarId';
    use HasFactory;
    protected $fillable =[
        //'ownerId',
       
        'name',
        'repairs',
        'Pending Repairs',
        'Replaced Parts',
        

    ];
    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
