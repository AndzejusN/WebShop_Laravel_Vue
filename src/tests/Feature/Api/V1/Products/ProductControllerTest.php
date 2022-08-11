<?php

namespace Tests\Feature\Api\V1\Products;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_product_fetch_success()
    {
        $response = $this->get(route('api.v1.products.index'));

        $response->assertStatus(200);
    }
}
