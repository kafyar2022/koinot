<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $contents = [
      [
        'slug' => '',
        'page' => '',
        'content' => '',
      ],
    ];

    foreach (config('app.available_locales') as $locale) {
      foreach ($contents as $content) {
        Content::create([
          'locale' => $locale,
          'slug' => $content['slug'] . '-' . $locale,
          'page' => $content['page'],
          'content' => $content['content'],
        ]);
      }
    }
  }
}
