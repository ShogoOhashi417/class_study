<?php

function customer(string $name, string $mail): array
{
    // assertMail($mail);

    return [
        'name' => $name,
        'age' => $mail
    ];
}

function getProfile(string $name, string $mail)
{
    return formatProfile($name, $mail);
}

function formatProfile(string $name, string $mail)
{
    return $name . "(" . $mail . ")";
}

// function assertMail(string $mail): void
// {
//     // customerにはメールアドレスがなくても良くなった場合、companyのことも考えないといけない
//     // 原因は、assertMailがどこからでも呼べてしまう仕組みの問題
//     if (!$mail) {
//         throw new Exception('メールアドレスを入力してください。');
//     }

//     if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
//         throw new Exception('無効なメールアドレスの形式です。');
//     }
// }

// function company(string $name, string $mail): array
// {
//     assertMail($mail);

//     return [
//         'name' => $name,
//         'age' => $mail
//     ];
// }

// function getProfile(string $name, string $mail)
// {
//     return formatProfile($name, $mail);
// }

// function formatProfile(string $name, string $mail)
// {
//     return $name . "(" . $mail . ")";
// }
