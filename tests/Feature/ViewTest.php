<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewTest extends TestCase
{
    public function test_see_code()
    {
        $response = $this->get('/');
        $response->assertSee('Code');
    }
}
