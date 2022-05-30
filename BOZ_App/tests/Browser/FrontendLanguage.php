<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class FrontendLanguage extends DuskTestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('db:seed');
        User::factory()->create();
    }


    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->click('@language-selector')
                ->click('button[local=\'nl\']')
                ->assertSee('De maatschappij is het probleem, niet de mens met de beperking')
                ->click('@language-selector')
                ->click('button[local=\'en\']')
                ->assertSee('Society is the problem, not the person with the disability')
                ->visit('/about-us')
                ->assertSee('Idea Creators')
                ->visit('/contact')
                ->assertSee('Contact Form')
                ->visit('/policy')
                ->assertSee('Financials')
                ->click('@language-selector')
                ->click('button[local=\'nl\']')
                ->assertSee('Taal');

        });
    }
}
