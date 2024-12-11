<?php

// manuallyRegistUserUseCase()
// csvRegistUserUseCase()
// apiRegistUseUseCase()
// のテストをするたびにregistBasicInfo()とsendMail()が毎回呼ばれる

function manuallyRegistUserUseCase()
{
    // テスト実行で毎回処理される
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


function csvRegistUserUseCase()
{
    registBasicInfo();
    sendMail();
}

function apiRegistUseUseCase()
{
    registBasicInfo();
    sendMail();
}