<?php

namespace App\Http\Controllers;

use App\Http\Resources\StatusResource;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        return StatusResource::collection(Status::all());
    }

    public function show(Status $status)
    {
        return new StatusResource($status);
    }

    public function store(Request $request)
    {
        $status = Status::create($request->all());

        return new StatusResource($status);
    }

    public function update(Request $request, Status $status)
    {
        $status->update($request->all());

        return new StatusResource($status);
    }

    public function destroy(Status $status)
    {
        $status->delete();

        return response()->json();
    }
}
