<?php

namespace App\Http\Controllers;

use App\Http\Resources\LevelResource;
use App\Models\VillainLevel;
use Illuminate\Http\Request;

class VillainLevelController extends Controller
{
    public function index()
    {
        //show all villain levels
        return LevelResource::collection(VillainLevel::all());
    }


    public function show(VillainLevel $level)
    {
        //show a single villain level
        return new LevelResource($level);
    }

    public function store(Request $request)
    {
        //create a new villain level
        $level = VillainLevel::create($request->all());

        return new LevelResource($level);
    }

    public function update(Request $request, VillainLevel $level)
    {
        //update a villain level
        $level->update($request->all());

        return new LevelResource($level);
    }

    public function destroy(VillainLevel $level)
    {
        //delete a villain level
        $level->delete();

        return response()->json();
    }
}
