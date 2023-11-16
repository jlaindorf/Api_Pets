<?php

namespace App\Http\Controllers;

use App\Models\Race;
use Illuminate\Http\Request;

class RaceController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'name' => 'required|string|unique:races|max:50'
        ]);

        $data = $request->all();
        $race =  Race::create($data);
        return $race;
    }


}
