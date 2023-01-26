<?php

namespace App\Http\Controllers;

use App\Models\RealEstate;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index (Request $request) {

        $real_estates = RealEstate::whereIn('state_id', [1, 2, 4, 5])->orderBy('created_at', 'DESC')->limit(6)->get()->shuffle();

        return view('welcome', compact('real_estates'));
    }
}
