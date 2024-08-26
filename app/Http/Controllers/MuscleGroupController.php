<?php

namespace App\Http\Controllers;

use App\Http\Requests\MuscleGroupRequest;
use App\Models\MuscleGroup;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class MuscleGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $muscle_groups = MuscleGroup::all();
        return $muscle_groups;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MuscleGroupRequest $request)
    {
        $muscle_group = MuscleGroup::create($request->validated());
        return response($muscle_group, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $muscle_group = MuscleGroup::findOrFail($id);
            return $muscle_group;
        } catch (ModelNotFoundException $ex) {
            return response()->json([
                'message' => 'MuscleGroup not found.',
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MuscleGroupRequest $request, string $id)
    {
        try {
            $muscle_group = MuscleGroup::findOrFail($id);
            $muscle_group->update($request->validated());
            return response($muscle_group, 200);
        } catch (ModelNotFoundException $ex) {
            return response()->json([
                'message' => 'MuscleGroup not found.',
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $muscle_group = MuscleGroup::findOrFail($id);
            $muscle_group->delete();
            return response(null, 204);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'MuscleGroup not found.',
            ], 404);
        }
    }
}
