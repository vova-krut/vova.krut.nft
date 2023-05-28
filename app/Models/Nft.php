<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nft extends Model
{
    protected $fillable = [
        'nft_name',
        'nft_image',
		'instant_price',
		'current_bid',
		'date',
		'owner_id',
		'creator_id',
    ];

    public $timestamps = false;


	public function owner(){
        return $this->hasOne(User::class, 'id', 'owner_id');
    }

	public function creator(){
        return $this->hasOne(User::class, 'id', 'creator_id');
    }
}
