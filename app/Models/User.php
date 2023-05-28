<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'user_name',
        'user_avatar',
		'user_money',
    ];

    public $timestamps = false;


	public function created_nfts(){
        return $this->hasMany(NFT::class, 'creator_id');
    }

	public function owned_nfts(){
        return $this->hasMany(NFT::class, 'owner_id');
    }
}
