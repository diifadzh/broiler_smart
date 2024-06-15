<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\ConfigHeater;
use Illuminate\Support\Facades\Auth;

class ConfigHeaterController extends Controller
{
    public function index()
    {
        $devices = Device::where('user_id', Auth::user()->id)->get();
        $device_id = session('device_id') ?? $devices->first()->id;
        $config = ConfigHeater::where('device_id', $device_id)->first();
        return view('content.config.heater.index', compact('devices', 'config'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Request $request)
    {
        try {
            $validated = $request->validate([
                "device_id" => ["required"],
            ]);

            $config = ConfigHeater::where('device_id', $request->device_id)->first();
            return response()->json($config, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request)
    {
        try {
            $validated = $request->validate([
                "device_id" => ["required"],
                "mode" => ["required", 'in:manual,automatic'],
                "status" => ['nullable', 'boolean'],
                "max_temp" => ['nullable', 'integer'],
                "min_temp" => ['nullable', 'integer']
            ]);

            $config = ConfigHeater::where('device_id', $request->device_id)->first();
            $config->mode = strtoupper($request->mode);
            if ($request->mode == "manual") {
                $config->status = $request->status;
            } else {
                $config->max_temp = $request->max_temp;
                $config->min_temp = $request->min_temp;
            }
            $config->save();

            toastr()->success("Configuration updated successfully");
            return redirect()->back()->with('device_id', $request->device_id);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function destroy(string $id)
    {
        //
    }
}
