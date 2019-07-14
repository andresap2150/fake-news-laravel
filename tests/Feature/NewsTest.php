<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NewsTest extends TestCase
{
    /**@test */
    function test_it_shows_the_seeded_news_title()
    {
        $response = $this->get('/news');

        $response->assertStatus(200)->assertSee("Leonel Alvarez");
    }
}