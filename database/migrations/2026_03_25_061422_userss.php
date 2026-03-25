<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class userss extends Migration
{
    /**
     * Schema::table('userss', function (Blueprint $table) {
     *          $table->string('password');
	 *       });.
     * php artisan migrate:rollback
     * php artisan migrate:rollback --step=5
     * php artisan migrate:reset
     * php artisan migrate:refresh 
     * $table->increments('id');
    *$table->string('name');
    *$table->string('surname');
    *$table->date('birthDate');
	*$table->date('created_at');
    
     */
    public function up(): void
    {
        Schema::table('userss', function (Blueprint $table) {
	           

	        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
