<?php

namespace Tests\Browser\Frontend;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class CTA extends DuskTestCase
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
    public function testContactFormIncludesPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('about-us.visitor.index')
                    ->scrollTo('@callToAction')
                    ->click("@callToAction")
                    ->assertInputValue("@pageLocation","About us");
        });
    }

    public function testBackendHaspage(){
        User::factory()->create();

        $this->browse(function (Browser $browser) {
            $browser->loginAs(1)
                    ->visitRoute('about-us.visitor.index')
                    ->scrollTo('@callToAction')
                    ->click("@callToAction")
                    ->type('fullname', 'Pieter Nijkerk')
                    ->type('email', 'pieter@mail.com')
                    ->type('message', "Lorem Ipsum")
                    ->pause(500)
                    ->scrollTo("@submit")
                    ->pause(500)
                    ->click("@submit")
                    ->visitRoute('contact.index')
                    ->assertSee("Over ons");
        });
    }
}
