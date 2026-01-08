<?php

require __DIR__ . "/../../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../../");
$dotenv->load();

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => $_ENV['WEATHER_API_URL'],
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: " . $_ENV['WEATHER_API_HOST'],
		"X-RapidAPI-Key: " . $_ENV['WEATHER_API_KEY']
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$temp_c = "";
$feelslike_c = "";
$current_condition_text = "";

if (!$err) {
	$data = json_decode($response, true);

	if (isset($data['current'])) {
        $temp_c = $data['current']['temp_c'] ?? 'N/A';
        $feelslike_c = $data['current']['feelslike_c'] ?? 'N/A';
        $current_condition_text = $data['current']['condition']['text'] ?? 'N/A';
    }
}
