<?php

namespace Tests\Browser\Contact;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AdminContactTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('db:seed');
    }

    /**
     * test if the index sees the added contact
     *
     * @return void
     */
    public function testHasContact()
    {
        Contact::create([
            'fullname' => "Jan Jansmalen",
            'email' => "j.jansmalen@test.nl",
            'message' => "Ik zou graag een project met jullie maken."
        ]);


        $this->browse(function (Browser $browser) {
            $browser
                ->loginAs(User::find(1))
                ->visit(route('contact.index'))
                ->assertSeeAnythingIn('tbody');
        });
    }
     /**
     * test empty index
     *
     * @return void
     */
    public function testHasNoContact()
    {

        $this->browse(function (Browser $browser) {
            $browser
                ->loginAs(User::find(1))
                ->visit(route('contact.index'))
                ->assertSeeNothingIn('tbody');
        });
    }
    /**
     * test if show button works
     *
     * @return void
     */
    public function testSeeDetails()
    {
        Contact::create([
            'fullname' => "Jan Jansmalen",
            'email' => "j.jansmalen@test.nl",
            'message' => "Ik zou graag een project met jullie maken."
        ]);

        $this->browse(function (Browser $browser) {
            $browser
                ->loginAs(User::find(1))
                ->visit(route('contact.index'))
                ->click('tbody tr:first-child td:last-child a')
                ->assertSee('Jan Jansmalen')
                ->assertSee('j.jansmalen@test.nl')
                ->assertSee('Ik zou graag een project met jullie maken.');
        });
    }
}
