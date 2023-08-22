<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    public function testIssetAndEmpty()
    {
        $this->view('isset-empty', [])
            ->assertDontSeeText("Hello")
            ->assertSeeText("I don't have any hobbies.",false);

        $this->view('isset-empty', ["name" => "Sulis"])
            ->assertSeeText("Sulis")
            ->assertSeeText("I don't have any hobbies.",false);

        $this->view('isset-empty', ["name" => "Sulis", "hobbies" => "Coding"])
            ->assertSeeText("Sulis")
            ->assertDontSeeText("I don't have any hobbies.",false);
    }

}
