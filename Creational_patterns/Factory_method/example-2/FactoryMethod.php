<?php

abstract class Manager
{
    protected $route;

    public function __construct(string $route)
    {
        $this->route = $route;
    }

    abstract public function getFeed(): FeedInterface;

    public function register()
    {
        echo "Register route: {$this->route}" . PHP_EOL;
        echo 'With content: ' . $this->getFeed()->render() . PHP_EOL;
    }
}

class YandexTurboManager extends Manager
{
    public function getFeed(): FeedInterface
    {
        return new YandexTurboFeed();
    }
}

class MailRuManager extends Manager
{
    public function getFeed(): FeedInterface
    {
        return new MailRuFeed();
    }
}

interface FeedInterface
{
    public function render(): string;
}

class YandexTurboFeed implements FeedInterface
{
    public function render(): string
    {
        return 'Render Yandex Turbo Feed';
    }
}

class MailRuFeed implements FeedInterface
{
    public function render(): string
    {
        return 'Render Mail Ru Feed';
    }
}

// Можно объекты *Manager пробросить в другой контроллер и использовать эти объекты через единый интерфейс Manager
$yandexManager = new YandexTurboManager('yandex-turbo');
$yandexManager->register();

$mailRuManager = new MailRuManager('mail-ru');
$mailRuManager->register();


//Register route: yandex-turbo - YandexTurboManager
//With content: Render Yandex Turbo Feed

//Register route: mail-ru - MailRuManager
//With content: Render Yandex Turbo Feed