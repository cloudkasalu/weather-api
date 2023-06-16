<?php 

if(isset($_POST['city'])){

    $city = $_POST['city'];

    $url = 'https://api.openweathermap.org/data/2.5/weather?q='. $city .'&units=metric&appid=e12f049cec44a699c22cb6c6b3b1224f';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);

    // Set so curl_exec returns the result instead of outputting it.
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    // Get the response and close the channel.
    $response = curl_exec($ch);
    curl_close($ch);

    var_dump($response);
}else{

    header('Location: /');

}