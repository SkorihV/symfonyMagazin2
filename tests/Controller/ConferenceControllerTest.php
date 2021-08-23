<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ConferenceControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient(); // предназначена для имитации браузера. Вместо отправки HTTP-запросов на сервер, происходит обращение к приложению Symfony напрямую.
        $client->request('GET', '/');

        $this->assertResponseIsSuccessful(); // проверяет, что главная страница возвращает статус 200 в HTTP-ответе.
        $this->assertSelectorTextContains('h2', 'Give your feedback');
    }
}
