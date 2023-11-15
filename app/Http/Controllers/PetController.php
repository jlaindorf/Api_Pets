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
        // Pegar somente um campo $name = $request->input('name');
        $pet = Pet::create($data);
        return $pet;

    }
    public function destroy($id)
    {
        try{

        $pet = Pet::find($id);
         $pet->delete();

        }catch (\Throwable $th) {
            return;
        }

    }
}
