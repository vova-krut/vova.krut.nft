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
        Schema::create('nfts', function (Blueprint $table) {
            $table->id();
            $table->string('nft_name');
            $table->string('nft_image');
            $table->float('instant_price');
            $table->float('current_bid');
            $table->date('date');
            $table->BigInteger('owner_id');
            $table->BigInteger('creator_id');
        });
    


		DB::table('nfts')->insert([
			[
				'nft_name' => 'the creator network®',
				'nft_image' => 'src/01.png',
				'instant_price' => 3.5,
				'current_bid' => 1.00,
				'date' => date('y/m/d',strtotime("+1 month")),
				'owner_id' => 1,
				'creator_id' => 2,
			],
			[
				'nft_name' => 'ETH never die',
				'nft_image' => 'src/02.png',
				'instant_price' => 1.125,
				'current_bid' => 0.5,
				'date' => date('y/m/d',strtotime("+2 month")),
				'owner_id' => 3,
				'creator_id' => 2,
			],
			[
				'nft_name' => 'the creator network®',
				'nft_image' => 'src/03.png',
				'instant_price' => 0.27,
				'current_bid' => 0.004,
				'date' => date('y/m/d',strtotime("+4 month")),
				'owner_id' => 3,
				'creator_id' => 1,
			],
			[
				'nft_name' => 'the creator network®',
				'nft_image' => 'src/04.png',
				'instant_price' => 10,
				'current_bid' => 3.00,
				'date' => date('y/m/d',strtotime("+10 month")),
				'owner_id' => 3,
				'creator_id' => 2,
			],
		
		]);

	}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nfts');
    }
};
