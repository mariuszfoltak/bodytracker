<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Date;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class RegisterWeightTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $this->post('/api/weight', [
            'weight' => 60.1,
            'register_date' => Date::now()
        ])->assertStatus(201);

        $this->get('/api/weight')
            ->assertStatus(200)
            ->assertJson(function (AssertableJson $json) {
                return $json->has(1);
            });
    }
}
