<?php

class Customer {
    private readonly string $name;
    private readonly int $mail;

    public function __construct(
        string $name,
        int $mail
    )
    {
        $this->name = $name;
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

    public function getProfile()
    {
        return $this->formatProfile($this->name, $this->mail);// 大橋省吾(sohashi@kairosmarketing.net)
    }

    private function formatProfile(string $name, int $mail)
    {
        return $name . "(" . $mail . ")";
    }
}