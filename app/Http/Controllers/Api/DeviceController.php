<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{

    public function index()
    {
        return Device::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $device = new Device;
        $device->user_id = $request->user_id;
        $device->name = $request->name;
        $device->save();
        return response()->json([
            "message" => "Device telah ditambahkan."
        ], 201);
    }

    public function show(string $id)
    {
        return Device::find($id);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        if (Device::where('id', $id)->exists()) {
            $device = Device::find($id);
            $device->user_id = is_null($request->user_id) ? $device->user_id : $request->user_id;
            $device->name = is_null($request->name) ? $device->name : $request->name;
            $device->save();
            return response()->json([
                "message" => "Device telah diupdate."
            ], 201);
        } else {
            return response()->json([
                "message" => "Device tidak ditemukan."
            ], 404);
        }
    }

    public function destroy(string $id)
    {
        if (Device::where('id', $id)->exists()) {
            $users = Device::find($id);
            $users->delete();
            return response()->json([
                "message" => "Device telah dihapus."
            ], 201);
        } else {
            return response()->json([
                "message" => "Device tidak ditemukan."
            ], 404);
        }
    }
}