<?php

final readonly class MannualyRegistUserUseCase
{
    private BasicInfoRegister $basiceInfoRegister;
    private MailSender $mailSender;

    // Mockに置き換えるためにはDIが必要
    // クラスならDIできる
    public function __construct(
        BasicInfoRegister $basiceInfoRegister,
        MailSender $mailSender
    )
    {
        $this->basiceInfoRegister = $basiceInfoRegister;
        $this->mailSender = $mailSender;
    }

    public function handle()
    {
        $this->basiceInfoRegister->registBasicInfo();
        $this->mailSender->sendMail();
    }
}
