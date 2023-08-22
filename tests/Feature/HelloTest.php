<?php

namespace Tests\Feature;

use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $this->get('/hello')
            ->assertSeeText('Sulis');

        $this->get('/template')
            ->assertSeeText('Sulis');

        $this->get('/world')
            ->assertSeeText('Laravel');
    }

    public function testViewWithoutRouting()
    {
        $this->view('hello', ["name" => "sulis"])
            ->assertSeeText("sulis");

        $this->view('hello.world', ["name" => "sulis"])
            ->assertSeeText("sulis");
    }

    public function testComment()
    {
        $this->view('comment', [])
            ->assertSeeText('Comment')
            ->assertDontSeeText('Eko');
    }

}
