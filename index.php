<?php
const LOGIN = "www-login";
const PASSWORD = "V3Rz6E#p28^H0c%v";
function check_credentials($username, $password)
{
    // Ваша логіка перевірки облікових даних тут.
    // Наприклад, перевірка з базою даних або іншим джерелом даних.
    // Поверніть true, якщо облікові дані є дійсними, інакше false.

    // Наприклад:
    $valid_username = LOGIN;
    $valid_password = PASSWORD;

    if ($username === $valid_username && $password === $valid_password) {
        return true;
    }

    return false;
}


if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
    // Показати заголовок авторизації і закінчити сценарій з кодом помилки 401 Unauthorized
    header('WWW-Authenticate: Basic realm="My Protected Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo '401 Unauthorized';
    exit;
}

$username = $_SERVER['PHP_AUTH_USER'];
$password = $_SERVER['PHP_AUTH_PW'];

if (check_credentials($username, $password)) {
    echo '?token=GHSAT0AAAAAACE4KPPRR45BYRCF4CY74TYQZGEFTDA';
} else {
    header('HTTP/1.0 403 Forbidden');
    echo 'You are forbidden! <br>
CONTACT ME HERE <a target="_blank" href="https://www.twitch.tv/merelyigor">
twitch.tv/merelyigor</a>';
}
exit;