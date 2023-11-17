<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index(Request $request)
    {

        try {

            $params= $request->query();

            $pets = Pet::query();
            if($request->has('age') && !empty($params['age'])){
                $pets->where('age', $params['age']);  }

            return  $pets->get();
        } catch (\Throwable $th) {
            return;
        }
    }
    public function store(Request $request)
    {

        $data = $request->all();
        // Pegar somente um campo $name = $request->input('name');
        $pet = Pet::create($data);
        return response($pet, 201);
    }
    public function destroy($id)
    {


        $pet = Pet::find($id); //se usar findOrFail ele retorna 404 se não achar o id

        if (!$pet)  return $this->response('Pet não encontrado', null, false, 404);
        $pet->delete();
        return $this->response('', null, true, 204);
    }

    public function show($id)
    {
        $pet = Pet::find($id);
        if (!$pet)  return $this->response('Pet não encontrado', null, false, 404);

        return $this->response('', $pet, true, 200);
    }

    public function update($id, Request $request)
    {
        $data = $request->all();
        $pet = Pet::find($id);
        if (!$pet)  return $this->response('Pet não encontrado', null, false, 404);

        $pet->update($data);
        return $pet;
    }
}
