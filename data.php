<?php
// data.php

function getUserByUsername($username) {
    // Load JSON data from file
    $data = json_decode(file_get_contents('data.json'), true);

    // Search for user by username
    foreach ($data['users'] as $user) {
        if ($user['UserName'] === $username) {
            return $user;
        }
    }
    return null;
}
?>