<?php

namespace Database\Seeders;

use App\Models\News;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    foreach (range(1, 36) as $key => $value) {
      $news = News::create([
        'title' => 'Lorem ipsum dolor sit',
        'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur eos molestiae dolorum.',
      ]);
    }
  }
}
