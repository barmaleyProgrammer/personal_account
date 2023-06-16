<?php
if (!getenv('DB_HOST')) {
    $envs = parse_ini_file($_SERVER['DOCUMENT_ROOT'].'/.env', false, INI_SCANNER_TYPED);
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
