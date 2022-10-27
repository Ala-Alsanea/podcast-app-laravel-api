<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Podcasts>
 */
class PodcastsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->sentence(),
            'author' => $this->faker->name(),

            'audio_path' => 'podcast_storage/audio/test.mp3',
            'img_path' => 'podcast_storage/img/test.png',
            'audio_format' => '.mp3',

            'description' => $this->faker->sentence(20),
            'audio_length' => $this->faker->sentence(),
            'tags' => $this->faker->sentence(),
        ];
    }
}