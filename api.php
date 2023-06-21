<?php
function seller(string $path = 'product'): array
{
    $ch = curl_init('https://hub2-box-asop.gerc.ua/api/v1/seller/'.$path.'/');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json; charset=utf-8',
        'Authorization: Token 3f178260cd89da0f8b2158115d7fbf1b373f0093'
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HEADER, false);
    $res = curl_exec($ch);
    curl_close($ch);

    return json_decode($res, 1, 512, JSON_THROW_ON_ERROR);
}

function room(string $path = ''): array
{
    $ch = curl_init('https://hub2-box-asop.gerc.ua/api/v1/room/'.$path);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json; charset=utf-8',
        'Authorization: Token a98851dd7e7a2c6f5fb9bd6e9e25a2b8b7bb87b6'
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HEADER, false);
    $res = curl_exec($ch);
    curl_close($ch);

    return json_decode($res, 1, 512, JSON_THROW_ON_ERROR);
}
