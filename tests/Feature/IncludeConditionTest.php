<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeConditionTest extends TestCase
{
    public function testIncludeCondition()
    {
        $this->view("include-condition", [
            "user" => [
                "name" => "Sulis",
                "owner" => true
            ]
        ])
            ->assertSeeText("Selamat datang owner")
            ->assertSeeText("Selamat datang Sulis");

        $this->view("include-condition", [
            "user" => [
                "name" => "Sulis",
                "owner" => false
            ]
        ])
            ->assertDontSeeText("Selamat datang owner")
            ->assertSeeText("Selamat datang Sulis");
    }
}
