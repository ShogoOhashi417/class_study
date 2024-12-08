<?php

// manuallyRegistUserUseCase()
// csvRegistUserUseCase()
// apiRegistUseUseCase()
// のテストをするたびにregistBasicInfo()とsendMail()が毎回呼ばれる

function manuallyRegistUserUseCase()
{
    // 手動で何かしらの処理
    registBasicInfo();
    sendMail();
}

function csvRegistUserUseCase()
{
    // csvで何かしらの処理
    registBasicInfo();
    sendMail();
}

function apiRegistUseUseCase()
{
    // apiで何かしらの処理
    registBasicInfo();
    sendMail();
}

function registBasicInfo()
{
    // 基本情報を保存する処理
}

function sendMail()
{
    // 登録メールを送信する処理
}