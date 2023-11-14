<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index()
    {

        try {
            $pets = Pet::All();
            return  $pets;
        } catch (\Throwable $th) {
            return;
        }
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $name = $request->input('name');
    }
}
