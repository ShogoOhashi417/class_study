<?php

class Company {
    private readonly string $name;
    private readonly int $mail;

    public function __construct(
        string $name,
        int $mail
    )
    {
        $this->name = $name;

        $this->assertMail($mail);
        $this->mail = $mail;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getmail()
    {
        return $this->mail;
    }

    private function assertMail(string $mail): void
    {
        // customerにはメールアドレスがなくても良くなった
        if (!$mail) {
            throw new Exception('メールアドレスを入力してください。');
        }

        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('無効なメールアドレスの形式です。');
        }
    }
}