<?php


use ChiefGroup\LaravelDy\ProjectServiceFacade;

class BaseTest extends \ChiefGroup\LaravelDy\Tests\TestCase
{
    public function testExample()
    {
        $r = ProjectServiceFacade::search([]);
        var_dump($r);
        $this->assertTrue(true);
    }
}