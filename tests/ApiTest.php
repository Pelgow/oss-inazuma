<?php

use PHPUnit\Framework\TestCase;
use pelgow\OssInazuma\Api;

class ApiTest extends TestCase
{
    public function testScrapingCharacters()
    {
        $characters = Api::scrapeCharacters();
        foreach ($characters as $character) {
            echo "Nom : " . $character['name'] . "\n";
            echo "Image : " . $character['image'] . "\n";
            echo "Description : " . $character['description'] . "\n";
            echo "\n";
        }
        $this->assertNotEmpty($characters);
    }
}
