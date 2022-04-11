<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminProjectsTest extends DuskTestCase
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
    public function testAdminProjectNavigation()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(1)
                ->visitRoute('project')
                ->assertSee('BOZ')
                ->click('@NavProjecten')
                ->assertPathIs('/cms/project');
        });
    }

    public function _testAdminCreateProject()
    {
        $this->browse(function (Browser $browser) {
            $titel = 'Nieuw project';
            $content = 'Dit is de content van het nieuwe project';
            $titel2 = 'Mogelijke tweede titel';
            $content2 = 'Hier kan nog meer content komen onder de tweede titel';

            $browser->visitRoute('project')
                ->assertPathIs('/cms/project')
                ->click('@AddProject')
                ->assertPathIs('/cms/project-create')
                ->assertInputValue('@Title', '')
                ->assertInputValue('@Content', '')
                ->assertInputValue('@Title2', '')
                ->assertInputValue('@Content2', '')
                ->type('@Title', $titel)
                ->type('@Content', $content)
                ->type('@Title2', $titel2)
                ->type("@Content2", $content2)
                ->click('@SubmitProject')
                ->assertSee('Project aanpassen')
                ->assertInputValue('@Title', $titel)
                ->assertInputValue('@Content', $content)
                ->assertInputValue('@Title2', $titel2)
                ->assertInputValue('@Content2', $content2);
        });
    }

    public function _testAdminCreateProjectErrorNoContent()
    {
        $this->browse(function (Browser $browser) {
            $titel = '';
            $content = '';
            $titel2 = 'Mogelijke tweede titel';
            $content2 = 'Hier kan nog meer content komen onder de tweede titel';

            $browser->visitRoute('project')
                ->assertPathIs('/cms/project')
                ->click('@AddProject')
                ->assertPathIs('/cms/project-create')
                ->assertInputValue('@Title', '')
                ->assertInputValue('@Content', '')
                ->assertInputValue('@Title2', '')
                ->assertInputValue('@Content2', '')
                ->type('@Title', $titel)
                ->type('@Content', $content)
                ->type('@Title2', $titel2)
                ->type("@Content2", $content2)
                ->click('@SubmitProject')
                ->assertSee('Nieuw project')
                ->assertInputValue('@Title', $titel)
                ->assertInputValue('@Content', $content)
                ->assertInputValue('@Title2', $titel2)
                ->assertInputValue('@Content2', $content2)
                ->assertSee('Het content veld is verplicht.')
                ->assertSee('Het title veld is verplicht.');
        });
    }

    public function _testAdminProjectTitleToLong()
    {
        $this->browse(function (Browser $browser) {
            //256 characters
            $title = 'BElDPq3DykuD76vYRoSuggzL8RacL2TjVW5cwf0xvi3wqIK0oVfKXrVBdwM96M9IDuMMMDh3xCJAlH2Tec5PY63uKDk8EVqSQXGbTcuiQ1HL388Nn8yDqrcEVqRVAUPahAXORVRUpQxht7jdWJoD9cescRxteY4pzxnlzjR05WPs6w60iyQCkp7noKFpQ3XGmNSVJ2tzJzmufqgdp8qk2a4zig9ubJiJRPlUDaKJ9rml5IiWAi98VrR93yE10Jny';
            $content = 'Dit is de content van het nieuwe project';
            $titel2 = 'Mogelijke tweede titel';
            $content2 = 'Hier kan nog meer content komen onder de tweede titel';

            $browser->visitRoute('project')
                ->assertPathIs('/cms/project')
                ->click('@AddProject')
                ->assertPathIs('/cms/project-create')
                ->assertInputValue('@Title', '')
                ->assertInputValue('@Content', '')
                ->assertInputValue('@Title2', '')
                ->assertInputValue('@Content2', '')
                ->type('@Title', $title)
                ->type('@Content', $content)
                ->type('@Title2', $titel2)
                ->type('@Content2', $content2)
                ->click('@SubmitProject')
                ->assertSee('Title mag niet groter zijn dan 255 karakters.')
                ->assertInputValue('@Title', $title)
                ->assertInputValue('@Content', $content)
                ->assertInputValue('@Title2', $titel2)
                ->assertInputValue('@Content2', $content2);
        });
    }

    public function _testAdminEditProject()
    {
        $this->browse(function (Browser $browser) {
            $titel = 'Nieuw project';
            $content = 'Dit is de content van het nieuwe project';
            $titel2 = 'Mogelijke tweede titel';
            $content2 = 'Hier kan nog meer content komen onder de tweede titel';
            $titleAddition = ' voor BOZ';

            $browser->visitRoute('project')
                ->assertPathIs('/cms/project')
                ->click('@AddProject')
                ->assertPathIs('/cms/project-create')
                ->assertInputValue('@Title', '')
                ->assertInputValue('@Content', '')
                ->assertInputValue('@Title2', '')
                ->assertInputValue('@Content2', '')
                ->type('@Title', $titel)
                ->type('@Content', $content)
                ->type('@Title2', $titel2)
                ->type("@Content2", $content2)
                ->click('@SubmitProject')
                ->assertInputValue('@Title', $titel)
                ->assertInputValue('@Content', $content)
                ->assertInputValue('@Title2', $titel2)
                ->assertInputValue('@Content2', $content2)
                ->click('@NavProjecten')
                ->click('@Nieuw project')
                ->append('@Title', $titleAddition)
                ->click('@SubmitProject')
                ->assertInputValue('@Title', $titel . $titleAddition)
                ->assertInputValue('@Content', $content)
                ->assertInputValue('@Title2', $titel2)
                ->assertInputValue('@Content2', $content2);
        });
    }

    public function _testAdminDeleteProject()
    {
        $this->browse(function (Browser $browser) {
            $titel = 'Nieuw project';
            $content = 'Dit is de content van het nieuwe project';
            $titel2 = 'Mogelijke tweede titel';
            $content2 = 'Hier kan nog meer content komen onder de tweede titel';

            $browser->visitRoute('project')
                ->assertPathIs('/cms/project')
                ->click('@AddProject')
                ->assertPathIs('/cms/project-create')
                ->assertInputValue('@Title', '')
                ->assertInputValue('@Content', '')
                ->assertInputValue('@Title2', '')
                ->assertInputValue('@Content2', '')
                ->type('@Title', $titel)
                ->type('@Content', $content)
                ->type('@Title2', $titel2)
                ->type("@Content2", $content2)
                ->click('@SubmitProject')
                ->assertSee('Project aanpassen')
                ->assertInputValue('@Title', $titel)
                ->assertInputValue('@Content', $content)
                ->assertInputValue('@Title2', $titel2)
                ->assertInputValue('@Content2', $content2)
                ->click('@DeleteProject')
                ->assertPathIs('/cms/project')
                ->assertDontSee($titel);
        });
    }
}
