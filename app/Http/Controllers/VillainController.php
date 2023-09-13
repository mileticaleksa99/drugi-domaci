<?php

namespace App\Http\Controllers;

use App\Http\Resources\VillainResource;
use App\Models\Villain;
use Illuminate\Http\Request;

class VillainController extends Controller
{
    public function index()
    {
        //show all villains
        return VillainResource::collection(Villain::all());
    }

    public function show(Villain $villain)
    {
        //show a single villain
        return new VillainResource($villain);
    }

    public function store(Request $request)
    {
        //create a new villain
        $villain = Villain::create($request->all());

        return new VillainResource($villain);
    }

    public function update(Request $request, Villain $villain)
    {
        //update a villain
        $villain->update($request->all());

        return new VillainResource($villain);
    }

    public function destroy(Villain $villain)
    {
        //delete a villain
        $villain->delete();

        return response()->json();
    }
}
