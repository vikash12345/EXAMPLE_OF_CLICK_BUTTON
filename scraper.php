<?
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful
require 'fabpot/goutte';
use Goutte\Client;

$client = new Client();
$crawler = $client->request('GET', 'https://www.symfony.com/blog/');
$crawler = $client->request('GET', 'https://github.com/');
$crawler = $client->click($crawler->selectLink('Sign in')->link());
$form = $crawler->selectButton('Sign in')->form();
$crawler = $client->submit($form, array('login' => 'fabpot', 'password' => 'xxxxxx'));
$crawler->filter('.flash-error')->each(function ($node) {
    print $node->text()."\n";

?>
