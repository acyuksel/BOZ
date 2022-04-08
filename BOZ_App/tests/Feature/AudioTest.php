<?php

namespace Tests\Feature;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\Admin\AudioController;
use Tests\TestCase;

class AudioTest extends TestCase
{
    use RefreshDatabase;

    public function test_add_audio_works()
    {
        $response = $this->post(route('audio.upload'), [
            'audio' => UploadedFile::fake()->create('audio.mp3', 3000),
            'fileName' => 'audio.mp3',
            'isPublic' => true
        ]);

        $response->assertSessionHasNoErrors();
        $this->assertDatabaseHas('media', ['name' => 'audio.mp3']);
    }


}
