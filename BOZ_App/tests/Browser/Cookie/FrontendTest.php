<?php

namespace Tests\Browser\Cookie;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class FrontendTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('db:seed');
    }
    
    public function testAcceptCookie()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->click('@CookieAccept')
                    ->assertPlainCookieValue('cookies_allowed','is_allowed')
                    ->deleteCookie('cookies_allowed');
        });
    }

    public function testDeclineCookie()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->click('@CookieDecline')
                    ->assertPlainCookieValue('cookies_allowed','not_allowed')
                    ->deleteCookie('cookies_allowed');
        });
    }
}
