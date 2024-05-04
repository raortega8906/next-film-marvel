<?php

function get_data($url){
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    $data = json_decode($result, true);
    curl_close($ch);
    return $data;
}

//function get_until_message(int $days): string
//{
//    return match (true){
//        $days === 0 => 'Hoy se estrena',
//        $days === 1 => 'Mañana se estrena',
//        default => "$days hasta el estreno",
//    };
//}
