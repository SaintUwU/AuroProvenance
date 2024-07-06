<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateYourTableAddForeignKey extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('cars', function (Blueprint $table)
         {
            if (!Schema::hasColumn('cars', 'ownerId')) {
                $table->unsignedBigInteger('ownerId'); // Define the column if it doesn't exist
            }
            
            $table->foreign('ownerId')->references('id')->on('users')-> onDelete('cascade')
            -> onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropForeign('your_table_ownerId_foreign');
        });
    }
};
