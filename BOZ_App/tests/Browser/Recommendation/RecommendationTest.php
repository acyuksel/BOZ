<?php

namespace Tests\Browser\Recommendation;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class RecommendationTest extends DuskTestCase
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
    public function testVisitRecommendationPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(1)
                ->visitRoute('recommendation')
                ->assertSee('Comité van aanbevelingen');
        });
    }

    public function testContextHulpIndex(){
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('recommendation')
                ->click('@ContextHulp')
                ->assertSee("Op deze pagina is een overzicht te zien van het comité van aanbevelingen."); 
        });
    }

    public function testContextHulpAction(){
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('recommendation-create')
                ->click('@ContextHulp')
                ->assertSee("Op deze pagina kan je een aanbeveling toevoegen of aanpassen."); 
        });
    }

    public function testAddRecommendationFail(){
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('recommendation-create')
                ->click('@Submitrecommendation')
                ->assertSee("Het naam veld is verplicht."); 
        });
    }

    public function testAddRecommendationSucces(){
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('recommendation-create')
                ->type("@Name", "Quin Tempelaars")
                ->type("@Description", "Dit is het verhaal van Quin Tempelaars")
                ->click('@Submitrecommendation')
                ->visitRoute("recommendation")
                ->pause(500)
                ->assertSee("Quin Tempelaars")
                ->assertSee("Dit is het verhaal");
        });
    }

    public function testEditRecommendationSucces(){
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('recommendation-create')
                ->type("@Name", "Quin Tempelaars")
                ->type("@Description", "Dit is het verhaal van Quin Tempelaars")
                ->click('@Submitrecommendation')
                ->assertInputValue("@Name","Quin Tempelaars")
                ->assertInputValue("@Description", "Dit is het verhaal van Quin Tempelaars")
                ->type("@Name", "Tom Coldenhoff")
                ->type("@Description", "Dit is het verhaal van Tom Coldenhoff")
                ->click('@Submitrecommendation')
                ->assertInputValue("@Name", "Tom Coldenhoff")
                ->assertInputValue("@Description", "Dit is het verhaal van Tom Coldenhoff");
        });
    }
}
