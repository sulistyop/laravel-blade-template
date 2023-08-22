<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InheritanceTest extends TestCase
{
    public function testParent()
    {
        $this->view('child',[])
            ->assertSeeText("Nama Aplikasi - Halaman Utama")
            ->assertSeeText("Deskripsi Header")
            ->assertSeeText("Ini adalah halaman utama")
            ->assertSeeText("Default Header")
            ->assertDontSeeText("Default Content");
    }

    public function testInheritanceWithoutOvveride()
    {
        $this->view('child-default',[])
            ->assertSeeText("Nama Aplikasi - Halaman Utama")
            ->assertDontSeeText("Deskripsi Header")
            ->assertDontSeeText("Ini adalah halaman utama")
            ->assertSeeText("Default Header")
            ->assertSeeText("Default Content");
    }

}
