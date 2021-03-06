<?php

namespace Tests\Browser\Privacy;

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

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testPolicyPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(1);
            $browser->visit('/policy')
                ->assertSee('Beleid')
                ->pause(200)
                ->click('@editbtn')
                ->assertSee('Oprichtingsdatum')
                ->click('.fr-element.fr-view')
                ->type('.fr-element.fr-view', 'Hoi')
                ->click('@savebtn')
                ->assertSee('Hoi');

        });
    }
}
