<?php

final readonly class Operator
{  
    private Factory $factory;

    public function __construct(
        Factory $factory
    )
    {
        $this->factory = $factory;
    }

    public function operate()
    {
        準備運動をする();

        // 工場クラスからハンドルをもらう
        $handle_item = $this->factory->getHandle();

        車を組み立てる();
    }
}