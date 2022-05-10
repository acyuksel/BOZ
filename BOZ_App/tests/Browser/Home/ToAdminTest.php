<?php

namespace Tests\Browser\Home;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class ToAdminTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('db:seed');
    }

    public function testToAdminNotLoggedIn()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertDontSee('CMS');
        });
    }

    public function testToAdmin()
    {
        User::factory()->create();

        $this->browse(function (Browser $browser) {
            $browser->loginAs(1)
                ->visit('/')
                ->click('@ToAdmin')
                ->assertSee('Terug naar website');
        });
    }
}
