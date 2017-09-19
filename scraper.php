<?
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful
use Goutte\Client;


$client = new Client();

$crawler = $client->request('GET', 'https://www.symfony.com/blog/');
$link = $crawler->selectLink('Security Advisories')->link();
$crawler = $client->click($link);
$crawler->filter('h2 > a')->each(function ($node) {
    print $node->text()."\n";
});
?>
