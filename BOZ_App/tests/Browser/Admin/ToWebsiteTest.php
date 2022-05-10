<?php

namespace Tests\Browser\Admin;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class ToWebsiteTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('db:seed');
    }
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        User::factory()->create();

        $this->browse(function (Browser $browser) {
            $browser->loginAs(1)
                ->visit('/cms')
                ->click('@ToWebsite')
                ->assertSee('CMS');
        });
    }
}
