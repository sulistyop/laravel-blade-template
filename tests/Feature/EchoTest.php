<?php

namespace Tests\Feature;

use App\Models\People;
use App\Models\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EchoTest extends TestCase
{
    public function testEcho()
    {
        $person = new Person();
        $person->name = "Sulis";
        $person->address = "Indonesia";

        $people = new People();
        $people->name = "Sulis People";
        $people->address = "Indonesia People";

        $this->view('echo', ["person" => $person, "people" => $people])
            ->assertSeeText("Sulis : Indonesia")
            ->assertSeeText("Sulis People : Indonesia People");

    }

}
