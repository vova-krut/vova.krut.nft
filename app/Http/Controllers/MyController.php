<?php

namespace App\Http\Controllers;

use App\Models\Nft;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class MyController extends Controller
{
    public static function nft($id)
    {
        session_start();

        $nft = Nft::where("id", $id)->first();

        if($nft)
        {
            return view('product', ['nft' => $nft]);
        }
        else{
            return 'Error!';
        }
    }


	public static function catalog()
    {
        session_start();
		$nfts = Nft::all();
		

        if($nfts)
        {
            return view('catalog', ['nfts' => $nfts]);
        }
        else{
            return 'Error!';
        }
    }

	public static function index()
    {
        session_start();
		$auction =  Nft::all()->first();
		$nfts = Nft::all();
		$creators = User::all();



        if($nfts)
        {
            return view('index', ['nfts' => $nfts, 'auction' => $auction, 'creators' => $creators]);
        }
        else{
            return 'Error!';
        }
    }
}