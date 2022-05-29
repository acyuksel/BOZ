<?php

namespace Tests\Browser\Partner;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class CmsTest extends DuskTestCase
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
            $browser->loginAs(1)
                ->visitRoute('partner')
                ->assertSee('Comité van aanbevelingen');
        });
    }

    public function testContextHulpIndex(){
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('partner')
                ->click('@ContextHulp')
                ->assertSee("Op deze pagina is een overzicht te zien van de partners."); 
        });
    }

    public function testContextHulpAction(){
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('partner-create')
                ->click('@ContextHulp')
                ->assertSee("Op deze pagina kan je een partner toevoegen of aanpassen."); 
        });
    }

    public function testAddPartnerFail(){
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('partner-create')
                ->click('@Submitpartner')
                ->assertSee("Het naam veld is verplicht."); 
        });
    }

    public function testAddPartnerSucces(){
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('partner-create')
                ->type("@Name", "Quin Tempelaars")
                ->type("@Description", "Dit is het verhaal van Quin Tempelaars")
                ->click('@Submitpartner')
                ->visitRoute("partner")
                ->pause(500)
                ->assertSee("Quin Tempelaars")
                ->assertSee("Dit is het verhaal");
        });
    }

    public function testEditPartnerSucces(){
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('partner-create')
                ->type("@Name", "Quin Tempelaars")
                ->type("@Description", "Dit is het verhaal van Quin Tempelaars")
                ->click('@Submitpartner')
                ->assertInputValue("@Name","Quin Tempelaars")
                ->assertInputValue("@Description", "Dit is het verhaal van Quin Tempelaars")
                ->type("@Name", "Tom Coldenhoff")
                ->type("@Description", "Dit is het verhaal van Tom Coldenhoff")
                ->click('@Submitpartner')
                ->assertInputValue("@Name", "Tom Coldenhoff")
                ->assertInputValue("@Description", "Dit is het verhaal van Tom Coldenhoff");
        });
    }
}
