<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UserEloquent;
use App\Models\games;
use App\Models\softwares;

class UserController extends Controller
{
	/**
	 * Show the signin page
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function home( Request $request )
	{
		$games = games::all();
		$softwares = softwares::all();
		return view('home')
			->with('countGames', $games->count())
			->with('games', $games)
			->with('countSoftwares', $softwares->count());
	}
	public function faq( Request $request )
	{
		return view('faq');
	}
	public function instructions( Request $request )
	{
		return view('instructions');
	}
	public function listgames( Request $request )
	{
		$games = games::all();
		return view('listgames')
				->with('games', $games);
	}
	public function listsoftwares( Request $request )
	{
		$softwares = softwares::all();
		return view('listsoftwares')
				->with('softwares', $softwares);
	}

}
