<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\RealEstate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class RealEstateController extends Controller
{
    public function index (Request $request) {

        $query = QueryBuilder::for(RealEstate::class, $request);
        $query = $query
            ->orderBy('id', 'ASC')
        ;

        $real_estates = $query->paginate(\request('per_page', 10));

        return view('frontend.real_estate.dashboard', compact('real_estates'));
    }

    public function show (Request $request, RealEstate $real_estate) {

        return view('frontend.real_estate.show', compact('real_estate'));
    }
}
