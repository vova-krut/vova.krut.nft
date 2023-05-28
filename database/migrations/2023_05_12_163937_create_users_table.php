<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('user_avatar');
			$table->float('user_money');
        });
    


		DB::table('users')->insert([
			[
				'user_name' => 'Zahar Abobenko',
				'user_avatar' => 'src/dudiki/1.jpg',
				'user_money' => 2.735
			],
			[
				'user_name' => 'Payton Harris',
				'user_avatar' => 'src/dudiki/2.png',
				'user_money' => 2.456
			],
			[
				'user_name' => 'Enrico Cole',
				'user_avatar' => 'src/dudiki/3.png',
				'user_money' => 1.777
			],
		
		]);

	}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
