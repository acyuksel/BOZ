<?php

namespace Tests\Browser\Frontend;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class BTT extends DuskTestCase
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
    public function testScrolBackToTop()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->driver->executeScript('window.scrollTo(0, 1000);');

            $browser->pause(500)
                    ->click('@backToTop')
                    ->pause(500)
                    ->assertSee("Bureau Onbeperkte Zaken");
        });
    }
}
