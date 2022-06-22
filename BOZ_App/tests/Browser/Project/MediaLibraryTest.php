<?php

namespace Tests\Browser\Project;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class MediaLibraryTest extends DuskTestCase
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
    public function testNavigation()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(1)
                ->visitRoute('project')
                ->assertSee('BOZ')
                ->click('@NavProjecten')
                ->assertPathIs('/cms/project')
                ->click('@AddProject')
                ->click('@OpenMediaLibrary')
                ->assertSee("Afbeeldingen")
                ->click("@NavVideo")
                ->assertSee("Video's")
                ->click("@NavAudio")
                ->assertSee("Audiofragmenten");
        });
    }

    public function testAddToLibrary()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('project')
                ->assertSee('BOZ')
                ->click('@NavProjecten')
                ->assertPathIs('/cms/project')
                ->click('@AddProject')
                ->click('@OpenMediaLibrary')
                ->assertSee("Afbeeldingen")
                ->attach('@FileInput', __DIR__.'/Images/Red1by4.jpg')
                ->pause(1000)
                ->assertSee("All media was added");
        });
    }

    public function testDeleteToLibrary(){
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('project')
                ->assertSee('BOZ')
                ->click('@NavProjecten')
                ->assertPathIs('/cms/project')
                ->click('@AddProject')
                ->click('@OpenMediaLibrary')
                ->assertSee("Afbeeldingen")
                ->attach('@FileInput', __DIR__.'/Images/Red1by4.jpg')
                ->pause(5000)
                ->assertSee("All media was added")
                ->click("@MediumSelect")
                ->click("@DeleteSelected")
                ->pause(1000)
                ->assertSee("All Media Files are removed");
        });
    }

    public function testAddToProject(){
        $this->browse(function (Browser $browser) {
            $expectedElement = "<input name=\"media[]\" value=\"1\" hidden> <input name=\"media[]\" value=\"1\" hidden=\"\">";
            $browser->visitRoute('project')
                ->assertSee('BOZ')
                ->click('@NavProjecten')
                ->assertPathIs('/cms/project')
                ->click('@AddProject')
                ->click('@OpenMediaLibrary')
                ->assertSee("Afbeeldingen")
                ->attach('@FileInput', __DIR__.'/Images/Red1by4.jpg')
                ->pause(5000)
                ->assertSee("All media was added")
                ->click("@MediumSelect")
                ->click("@AddSelected")
                ->pause(500)
                ->assertAttribute("@AddedMedium", "value", 1);
        });
    }
}
