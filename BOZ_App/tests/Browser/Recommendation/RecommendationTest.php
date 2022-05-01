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
}
