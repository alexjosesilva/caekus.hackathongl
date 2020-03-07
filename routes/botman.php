<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');



$botman->hears('oi', function ($bot) {
    $bot->reply('Ola!');
    
});

$botman->hears('bom dia', function ($bot) {
    $bot->reply('Bom dia!');
    
});

$botman->hears('boa tarde', function ($bot) {
    $bot->reply('Bom tarde!');
    
});


$botman->hears('preciso de um advogado', function ($bot) {
    $bot->reply('Qual a necessidade');
    
});


$botman->hears('divorcio', function ($bot) {
    $bot->reply('Advogado Alex - OAB 12345');
    $bot->reply('Advogado Alexandre - OAB 12345');
    $bot->reply('Advogado Maria - OAB 12345');

    $link = 'www.google.com.br';
    $bot->reply($link);
});

$botman->hears('trabalho', function ($bot) {
    $bot->reply('Advogado Gustavo');
    
});

$botman->hears('saude', function ($bot) {
    $bot->reply('Advogado Yara');   
});

$botman->hears('violencia domestica', function ($bot) {
    $bot->reply('Advogado Yara');   
});

$botman->hears('Posso mudar ?', function ($bot) {
    $bot->reply('sim, qual necessidade ?');   
});

$botman->hears('quero outro advogado', function ($bot) {
    $bot->reply('ok, qual necessidade ?');   
});

$botman->hears('Start conversation', BotManController::class.'@startConversation');
