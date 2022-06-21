<?php

namespace Tests\Browser\Policy;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class IndexTest extends DuskTestCase
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
    public function testPolicyPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(1);
            $browser->visit('/privacy')
                ->assertSee('Privacyverklaring')
                ->pause(200)
                ->click('@editbtn')
                ->assertSee('Uitgangspunten')
                ->click('.fr-element.fr-view')->pause(2000)
                ->type('.fr-element.fr-view', 'Hoi')->pause(2000)
                ->click('@savebtn')->pause(2000)
                ->assertSee('Hoi');
        });
    }
}
