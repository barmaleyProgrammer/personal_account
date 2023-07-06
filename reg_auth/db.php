<?php
if (!getenv('DB_HOST')) {
    $envs = parse_ini_file(dirname(__FILE__).'/../.env', false, INI_SCANNER_TYPED);
    foreach ($envs as $key => $value) {
        putenv("$key=$value");
    }
}


$conn = mysqli_connect(
    hostname: getenv('DB_HOST'),
    username: getenv('DB_USER'),
    password: getenv('DB_PASSWORD'),
    database: getenv('DB_NAME'),
    port: getenv('DB_PORT')
);
mysqli_set_charset($conn, 'utf8');

function auth(): int|null
{
    global $conn;
    $userName = $_COOKIE['user'] ?? '';
    if (!empty($userName)) {
        $result = mysqli_query($conn,"SELECT id FROM users WHERE name = '$userName' LIMIT 1");
        return $result->fetch_column(0);
    }
    return null;
}

$userid = auth();
