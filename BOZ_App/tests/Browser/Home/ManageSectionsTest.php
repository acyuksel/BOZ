<?php

namespace Tests\Browser\Home;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ManageSectionsTest extends DuskTestCase
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
    public function testSectionManagement()
    {
        User::factory()->create();

        $this->browse(function (Browser $browser) {
            $browser->loginAs(1)
                ->visit('/')
                ->assertSee('Bureau Onbeperkte Zaken')
                ->assertSee('Edit')
                ->click('section:first-of-type button[editbutton="true"]')
                ->type('header1', 'HEADER_TEST')
                ->click('button[editsectionnr="1"]')
                ->assertSee('HEADER_TEST')
                ->click('button[addbutton="true"]')
                ->click('div[addoptioncontainer="true"] > form > button')
                ->assertSee('Nothing here yet')
                ->click('button[section="2"][deletebutton="true"]')
                ->acceptDialog()
                ->assertDontSee('Nothing here yet');
        });
    }
}
