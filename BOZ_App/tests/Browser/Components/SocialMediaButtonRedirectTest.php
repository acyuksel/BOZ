<?php

namespace Tests\Browser\Components;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class SocialMediaButtonRedirectTest extends DuskTestCase
{
    public function testFacebook()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact')
                ->click('a[href="https://facebook.com"]');
            // switch to the last tab
            $window = collect($browser->driver->getWindowHandles())->last();
            $browser->driver->switchTo()->window($window);
            $browser->pause(100)->assertHostIs('www.facebook.com');
        });
    }

    public function testInstagram()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact')
                ->click('a[href="https://instagram.com"]');
            // switch to the last tab
            $window = collect($browser->driver->getWindowHandles())->last();
            $browser->driver->switchTo()->window($window);
            $browser->pause(100)->assertHostIs('www.instagram.com');
        });
    }

    public function testLinkedin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact')
                ->click('a[href="https://linkedin.com"]');
            // switch to the last tab
            $window = collect($browser->driver->getWindowHandles())->last();
            $browser->driver->switchTo()->window($window);
            $browser->pause(100)->assertHostIs('linkedin.com');
        });
    }
}
