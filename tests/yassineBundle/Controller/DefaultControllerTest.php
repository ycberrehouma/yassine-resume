<?php

namespace yassineBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/yy');

        $this->assertContains('Hefffffllo World', $client->getResponse()->getContent());
    }
}
