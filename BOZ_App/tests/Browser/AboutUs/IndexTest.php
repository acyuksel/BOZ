<?php

namespace Tests\Browser\AboutUs;

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
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(1);
            $browser->visit('/about-us')
                ->assertSee('Over ons')
                ->pause(200)
                ->click('@editbtn')
                ->assertSee('Ideeënmakers')
                ->click('.fr-element.fr-view')
                ->type('.fr-element.fr-view', 'Hoi')
                ->click('@savebtn')
                ->assertSee('Hoi');

        });
    }
}
