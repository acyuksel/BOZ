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

    public function testAdminCreateProject()
    {
        $this->browse(function (Browser $browser) {
            $titel = 'Nieuw project';
            $content = 'Dit is de content van het nieuwe project';

            $browser->visitRoute('project')
                ->assertPathIs('/cms/project')
                ->click('@AddProject')
                ->assertPathIs('/cms/project-create')
                ->assertInputValue('@Title', '')
                ->assertInputValue('.fr-element.fr-view', '')
                ->type('@Title', $titel)
                ->click('.fr-element.fr-view')
                ->type('.fr-element.fr-view', $content)
                ->click('@SubmitProject')
                ->assertSee('Project aanpassen')
                ->assertInputValue('@Title', $titel)
                ->assertSeeIn('.fr-element.fr-view', $content);
        });
    }

    public function testAdminCreateProjectErrorNoContent()
    {
        $this->browse(function (Browser $browser) {
            $titel = '';
            $content = '';

            $browser->visitRoute('project')
                ->assertPathIs('/cms/project')
                ->click('@AddProject')
                ->assertPathIs('/cms/project-create')
                ->assertInputValue('@Title', '')
                ->assertInputValue('.fr-element.fr-view', '')
                ->type('@Title', $titel)
                ->click('.fr-element.fr-view')
                ->type('.fr-element.fr-view', $content)
                ->click('@SubmitProject')
                ->assertSee('Project toevoegen')
                ->assertInputValue('@Title', $titel)
                ->assertInputValue('.fr-element.fr-view', $content)
                ->assertSee('Het content veld is verplicht.')
                ->assertSee('Het title veld is verplicht.');
        });
    }

    public function testAdminProjectTitleToLong()
    {
        $this->browse(function (Browser $browser) {
            //256 characters
            $title = 'BElDPq3DykuD76vYRoSuggzL8RacL2TjVW5cwf0xvi3wqIK0oVfKXrVBdwM96M9IDuMMMDh3xCJAlH2Tec5PY63uKDk8EVqSQXGbTcuiQ1HL388Nn8yDqrcEVqRVAUPahAXORVRUpQxht7jdWJoD9cescRxteY4pzxnlzjR05WPs6w60iyQCkp7noKFpQ3XGmNSVJ2tzJzmufqgdp8qk2a4zig9ubJiJRPlUDaKJ9rml5IiWAi98VrR93yE10Jny';
            $content = 'Dit is de content van het nieuwe project';

            $browser->visitRoute('project')
                ->assertPathIs('/cms/project')
                ->click('@AddProject')
                ->assertPathIs('/cms/project-create')
                ->assertInputValue('@Title', '')
                ->assertInputValue('.fr-element.fr-view', '')
                ->type('@Title', $title)
                ->click('.fr-element.fr-view')
                ->type('.fr-element.fr-view', $content)
                ->click('@SubmitProject')
                ->assertSee('Title mag niet groter zijn dan 255 karakters.')
                ->assertInputValue('@Title', $title)
                ->assertInputValue('.fr-element.fr-view', $content);

        });
    }

    public function testAdminEditProject()
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
                ->assertInputValue('.fr-element.fr-view', '')
                ->type('@Title', $titel)
                ->click('.fr-element.fr-view')
                ->type('.fr-element.fr-view', $content)
                ->click('@SubmitProject')
                ->assertInputValue('@Title', $titel)
                ->assertInputValue('.fr-element.fr-view', $content)
                ->click('@NavProjecten')
                ->click('@Nieuw project')
                ->append('@Title', $titleAddition)
                ->click('@SubmitProject')
                ->assertInputValue('@Title', $titel . $titleAddition)
                ->assertInputValue('.fr-element.fr-view', $content);

        });
    }

    public function testAdminDeleteProject()
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
                ->assertInputValue('.fr-element.fr-view', '')
                ->type('@Title', $titel)
                ->click('.fr-element.fr-view')
                ->type('.fr-element.fr-view', $content)
                ->click('@SubmitProject')
                ->assertSee('Project aanpassen')
                ->assertInputValue('@Title', $titel)
                ->assertInputValue('.fr-element.fr-view',$content)
                ->click('@DeleteProject')
                ->assertPathIs('/cms/project')
                ->assertDontSee($titel);
        });
    }
}
