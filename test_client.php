<?php

publicMethod(); // 呼び出せる
privateMethod(); // 呼び出せる

function publicMethod()
{
    privateMethod();
}

function privateMethod()
{
}