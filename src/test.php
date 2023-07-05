<?php

declare(strict_types=1);

namespace 05pau\OssInazuma;

class Api
{
    public function getRandomNumber(): int
    {
        return rand(0, 100);
    }
}