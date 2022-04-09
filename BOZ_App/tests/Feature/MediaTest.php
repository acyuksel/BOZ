<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\Models\Medium;
use Tests\TestCase;


class MediaTest extends TestCase
{
    use RefreshDatabase;

    public function test_media_store_should_work()
    {
        Storage::fake('local');
        $file = UploadedFile::fake()->image('img.png');

        $response = $this->postJson(route('media-store'), [
            'media' => array($file)
        ]);

        $response
            ->assertSessionHasNoErrors()
            ->assertStatus(200);

        Storage::disk('local')->assertExists('public/images/img.png');
        $this->assertDatabaseHas("media", [
            "name" => 'img',
            "extension" => 'png',
        ]);
    }

    public function test_media_store_should_return_validation_error()
    {
        Storage::fake('local');

        $file = UploadedFile::fake()->create('test.pdf', 3000);

        $response = $this->postJson(route('media-store'), [
            'media' => array($file)
        ]);

        $response
            ->assertStatus(400)
            ->assertJson(['status' => 'Validation error']);
    }

    public function test_delete_media_should_work()
    {
        Storage::fake('local');
        $file = UploadedFile::fake()->image('img.png');
        $storagePath = "public/images";
        $newMedium = new Medium([
            'name' => pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME),
            'extension' => $file->clientExtension()
        ]);

        Storage::putFileAs($storagePath, $file, 'img.png');
        $newMedium->save();

        $fileDelete = $newMedium->id;
        $response = $this->postJson(route('media-delete'), [
            'media' => array($fileDelete)
        ]);

        $response
            ->assertSessionHasNoErrors()
            ->assertStatus(200);
    }

    public function test_delete_media_should_return_validation_error()
    {
        Storage::fake('local');
        $file = UploadedFile::fake()->image('img.png');
        $storagePath = "public/images";
        $newMedium = new Medium([
            'name' => pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME),
            'extension' => $file->clientExtension()
        ]);

        Storage::putFileAs($storagePath, $file, 'img.png');
        $newMedium->save();

        $fileDelete = $newMedium->id;
        $response = $this->postJson(route('media-delete'), [
            'media' => array('test')
        ]);

        $response
            ->assertStatus(400)
            ->assertJson(['status' => 'Validation error']);

        Storage::disk('local')->assertExists('public/images/img.png');
        $this->assertDatabaseHas("media", [
            "name" => 'img',
            "extension" => 'png',
        ]);
    }
}
