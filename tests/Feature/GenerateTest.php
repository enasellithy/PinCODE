<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GenerateTest extends TestCase
{
    public function test_check_generate_button()
    {
        $response = $this->post('/bin_code');
        $response->assertStatus(200);
    }
}
