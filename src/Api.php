<?php

declare(strict_types=1);

namespace pelgow\OssInazuma;

class Api
{
    public function getRandomNumber(): int
    {
        return rand(0, 100);
    }
}