<?php

function customer(string $name, string $mail): array
{
    return [
        'name' => $name,
        'age' => $mail
    ];
}

function getProfile(string $name, string $mail)
{
    // $name : "大橋省吾", $mail : "sohashi@kairosmarketing.net"
    return formatProfile($name, $mail); // 大橋省吾(sohashi@kairosmarketing.net)
}

function formatProfile(string $name, string $mail)
{
    return $name . "(" . $mail . ")";
}