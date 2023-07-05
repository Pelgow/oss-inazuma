<?php

declare(strict_types=1);

namespace pelgow\OssInazuma;

use Symfony\Component\DomCrawler\Crawler;

class Api
{
    public static function scrapeCharacters()
    {
        $url = 'https://www.giantbomb.com/inazuma-eleven/3025-1280/characters/';
        $crawler = new Crawler();
        $html = file_get_contents($url);
        $crawler->addHtmlContent($html);
        $characterData = [];
        $crawler->filter('ul.editorial li')->each(function (Crawler $characterCrawler) use (&$characterData) {
            $name = $characterCrawler->filter('h3.title')->text();
            $image = $characterCrawler->filter('img')->attr('src');
            $description = $characterCrawler->filter('p')->text();
            $characterData[] = [
                'name' => $name,
                'image' => $image,
                'description' => $description,
            ];
        });
        return $characterData;
    }
}
