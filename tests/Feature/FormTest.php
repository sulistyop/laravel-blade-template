<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view('form',[
            "user" => [
                "premium" => true,
                "name"  => "Sulis",
                "admin" => true
            ]
        ])
            ->assertSee("checked")
            ->assertSee("Sulis")
            ->assertDontSee("readonly");

        $this->view('form',[
            "user" => [
                "premium" => false,
                "name"  => "Sulis",
                "admin" => false
            ]
        ])
            ->assertDontSee("checked")
            ->assertSee("Sulis")
            ->assertSee("readonly");
    }

}
