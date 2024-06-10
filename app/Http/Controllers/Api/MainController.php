<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\ConfigHeater;
use App\Models\ConfigLamp;
use App\Models\DataSensor;
use \PhpMqtt\Client\MqttClient;
use \PhpMqtt\Client\ConnectionSettings;

class MainController extends Controller
{
    // [Get] configuration from actuator
    public function get_config($deviceId)
    {
        $device = Device::find($deviceId);
        $configHeater = ConfigHeater::where('device_id', $deviceId)->first();
        $configLamp = ConfigLamp::where('device_id', $deviceId)->first();
        return response()->json([
            "status" => "Success",
            "message" => "Config fetch successfuly",
            "data" => [
                "device" => $device,
                "heater" => $configHeater,
                "lamp" => $configLamp
            ]
        ], 200);
    }

    // [GET] data from sensor
    public function get_data(Request $request, $deviceId)
    {
        return DataSensor::all();
    }

    // [POST] data from sensor
    public function post_data(Request $request, $deviceId)
    {
        try {
            $validated = $request->validate([
                'temperature' => ['decimal:1'],
                'humidity' => ['decimal:1'],
                'light_intensity' => ['decimal:1']
            ]);
            $dataSensor = DataSensor::create([
                'device_id' => $deviceId,
                'temperature' => $request->temperature,
                'humidity' => $request->humidity,
                'light_intensity' => $request->light_intensity,
            ]);
            return response()->json([
                "status" => "Success",
                "message" => "Data successfuly created",
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                "status" => "Error",
                "message" => "Data error",
                "error" => $e->getMessage(),
            ], 400);
        }
    }

    public function publish()
    {
        $device_id = (int) request()->get('device_id');
        $data = (int) request()->get('data');
        $msg = json_encode([
            "device_id" > $device_id,
            "data" > $data
        ]);

        $pub_topic = env('MQTT_TOPIC_SUB', 'emqx/test');
        $server = env('MQTT_BROKER', 'broker.emqx.io');
        $port = env('MQTT_PORT', 1883);
        $sub_clientId = env('MQTT_CLIENT_ID_SUB', 'my-sub-unique-id-1234567890');
        $username = env('MQTT_USER', '');
        $password = env('MQTT_PASSWORD', '');
        $clean_session = false;
        $mqtt_version = MqttClient::MQTT_3_1_1;

        $connectionSettings = (new ConnectionSettings)
            ->setUsername($username)
            ->setPassword($password)
            ->setKeepAliveInterval(60);

        $mqtt = new MqttClient(
            $server,
            $port,
            $sub_clientId,
            $mqtt_version
        );

        $mqtt->connect($connectionSettings, $clean_session);
        printf("Publishser client connected!\n");

        $mqtt->publish($pub_topic, $msg, 0, true);
        $mqtt->disconnect();

        $dataSensor = new DataSensor();
        $dataSensor->device_id = $device_id;
        $dataSensor->data = $data;
        $dataSensor->save();
    }

    // if (Device :where('id', $device_id) >exists()) {
    // $device = Device :find($device_id);
    // $device >current_value = $data;
    // $device >save();
    // }
    // return view('device', [
    // "title" -> "device",
    // "device" -> Device ::find($device_id),
    // "data" ->
    // Data ::where('device_id',$device_id) ->orderBy('created_at',
    // 'DESC') ->get()
    // ]);
}