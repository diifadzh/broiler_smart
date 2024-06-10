<?php

namespace App\Console\Commands;

use App\Models\DataSensor;
use \PhpMqtt\Client\MqttClient;
use Illuminate\Console\Command;
use \PhpMqtt\Client\ConnectionSettings;

class MqttListener extends Command
{
    protected $signature = 'app:mqtt-listener';
    protected $description = 'Command description';

    public function handle()
    {
        $sub_topic = env('MQTT_TOPIC_SUB', 'emqx/test');
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
        printf("Subscriber client connected!\n");

        $mqtt->subscribe($sub_topic, function ($topic, $message) {
            printf(
                "Received message on topic [%s]: %s\n",
                $topic,
                $message
            );
            $objMsg = json_decode($message);
            printf("device_id: %d\n", $objMsg->device_id);
            printf("temperature: %d\n", $objMsg->temperature);
            printf("humidity: %d\n", $objMsg->humidity);
            printf("light_intensity: %d\n", $objMsg->light_intensity);

            $dataSensor = new DataSensor;
            $dataSensor->device_id = $objMsg->device_id;
            $dataSensor->temperature = $objMsg->temperature;
            $dataSensor->humidity = $objMsg->humidity;
            $dataSensor->light_intensity = $objMsg->light_intensity;
            $dataSensor->save();
            // if (Device::where('id', $objMsg->device_id)->exists()) {
            //     $device = Device::find($objMsg->device_id);
            //     $device->current_value = $objMsg->data;
            //     $device->save();
            // }

            // try {
            //     $validated = $objMsg->validate([
            //         'temperature' => ['decimal:1'],
            //         'humidity' => ['decimal:1'],
            //         'light_intensity' => ['decimal:1']
            //     ]);
            //     $dataSensor = DataSensor::create([
            //         'device_id' => $objMsg->deviceId,
            //         'temperature' => $objMsg->temperature,
            //         'humidity' => $objMsg->humidity,
            //         'light_intensity' => $objMsg->light_intensity,
            //     ]);
            //     return response()->json([
            //         "status" => "Success",
            //         "message" => "Data successfuly created",
            //     ], 201);
            // } catch (\Exception $e) {
            //     return response()->json([
            //         "status" => "Error",
            //         "message" => "Data error",
            //         "error" => $e->getMessage(),
            //     ], 400);
            // }
            printf("Data has been saved to database\n");
        }, 0);
        $mqtt->loop(true);
    }
}