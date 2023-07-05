<?php

declare(strict_types=1);

namespace pelgow\OssInazuma;

use Symfony\Component\DomCrawler\Crawler;

class Api
{
    public static function scrapeCharacters():  array | false
    {
        $url = 'https://www.giantbomb.com/inazuma-eleven/3025-1280/characters/';

        $html = file_get_contents($url);
        if ($html === false) {
            return [];
        }

        $crawler = new Crawler();
        $crawler->addHtmlContent($html);

        $characterData = [];

        $crawler->filter('.editorial li')->each(function (Crawler $node) use (&$characterData) {
            $name = $node->filter('h3.title')->text();
            $image = $node->filter('img')->attr('src');
            $description = $node->filter('p')->text();

            $characterData[] = [
                'name' => $name,
                'image' => $image,
                'description' => $description,
            ];
        });

        return $characterData;
    }
}
