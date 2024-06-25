<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSensor;

class DashboardController extends Controller
{
    public function index()
    {
        $dataSensor = DataSensor::orderBy('created_at', 'desc')->get();
        return view('content.dashboard.index', compact('dataSensor'));
    }

    public function detail()
    {
        return view('content.dashboard.detail');
    }
}
