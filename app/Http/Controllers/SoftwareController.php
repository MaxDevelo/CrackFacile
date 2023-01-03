<?php

namespace App\Http\Controllers;

use App\Models\softwares;
use Illuminate\Http\Request;

class SoftwareController extends Controller
{
    public function showsoftware(Request $request, $slug){
        $game = softwares::find($slug);
        return view('showsoftware')
            ->with('software', $software);
    }
}
