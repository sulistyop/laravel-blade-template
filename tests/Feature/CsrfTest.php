<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CsrfTest extends TestCase
{
    public function testCSRF()
    {
        $this->view("csrf", [])
            ->assertSee("hidden")
            ->assertSee("_token");
    }

}
