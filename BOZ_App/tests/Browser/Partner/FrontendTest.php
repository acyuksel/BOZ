<?php

namespace Tests\Browser\Partner;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class FrontendTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('db:seed');
        User::factory()->create();
    }

    public function testVisitRecommendationPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('partners')
                ->assertSee('Samenwerkingspartners');
        });
    }

    public function testSeeAddedRecommendation()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(1)
            ->visitRoute('partner-create')
            ->type("@Name", "Quin Tempelaars")
            ->type("@Description", "Dit is het verhaal van Quin Tempelaars")
            ->click('@SubmitPartner')
            ->visitRoute("partners")
            ->scrollto("@title")
            ->assertSee("Quin Tempelaars")
            ->assertSee("Dit is het verhaal");
        });
    }
}
