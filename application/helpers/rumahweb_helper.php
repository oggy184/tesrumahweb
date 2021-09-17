<?php
$th = get_instance();

function check_password($password)
{
    $number = preg_match_all('/\d/', $password, $matches);
    $capital = preg_match_all('/[A-Z]/', $password, $matches);
    $lower = preg_match_all('/[a-z]/', $password, $matches);
    $symbol = preg_match_all('/[^a-zA-Z]/', $password, $matches);

    $length = strlen($password);

    if ($number > 0 && $capital > 0 && $lower > 0 && $symbol >= 2 && $length >= 12) {
        return true;
    } else {
        return false;
    }
}

function check_email($email)
{
    $check = preg_match('/`@rumahweb.co.id`\b/', $email);

    if ($check > 0) {
        return true;
    } else {
        return false;
    }
}

function check_age($birth)
{
    $now = new DateTime('now');
    $bd = new DateTime($birth);
    $diff = $now->diff($bd);

    if ($diff->y >= 17) {
        return true;
    } else {
        return false;
    }
}
