<?php

namespace Tests\Browser\Contact;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class FillContactForm extends DuskTestCase
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
            $browser->visit('/contact')
                ->assertSee(__('Contact Form'))
                ->type('fullname', 'Pieter Nijkerk')
                ->type('email', 'pieter@mail.com')
                ->type('message', "Lorem Ipsum")
                ->scrollTo("@submit")
                ->pause(500)
                ->click("@submit")
                ->assertSee(__('Contact sent successfully'));
        });
    }
}
