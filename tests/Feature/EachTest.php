<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
    public function testEach()
    {
        $this->view('each', [
            "users" => [
                [
                    "name" => "Sulis",
                    "hobbies" => ["Coding", "Gaming"]
                ],
                [
                    "name" => "Tyo",
                    "hobbies" => ["Coding", "Gaming"]
                ],
            ]
        ])->assertSeeInOrder(['.red','Sulis', 'Coding', 'Gaming', 'Tyo', 'Coding', 'Gaming']);
    }

}
