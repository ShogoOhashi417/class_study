<?php

class Test
{
    public function publicMethod()
    {
        $this->privateMethod(); // これは呼び出せる
    }

    private function privateMethod()
    {
    }
}

$test = new Test();

$test->publicMethod(); // publicなので呼び出せる
$test->privateMethod(); // 外部からは呼び出せない