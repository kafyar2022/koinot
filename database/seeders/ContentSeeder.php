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
        'slug' => 'main-page-board',
        'page' => 'main',
        'content' => '<h1>Группа компаний <br> Коиноти нав</h1><p>Верим, можем, создаем</p><a href="#">Подробнее</a>',
      ],
      [
        'slug' => 'main-page-management',
        'page' => 'main',
        'content' => '<h2>Наш менеджмент</h2><p>В нас сочетаются инновации и традиции. <br> Мы знак истинного качества, символ верности <br> и преданности своему делу, своему обществу и стране.</p><a href="#">Подробнее</a>',
      ],
      [
        'slug' => 'main-page-investors',
        'page' => 'main',
        'content' => '<h2>Инвесторам</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.</p><a href="#">Подробнее</a>',
      ],
      [
        'slug' => 'main-page-contribution',
        'page' => 'main',
        'content' => '<h2>Вклад в общество</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.</p><a href="#">Подробнее</a>',
      ],
      [
        'slug' => 'main-page-opportunity',
        'page' => 'main',
        'content' => '<h2>Страна возможностей</h2><p>Современный Таджикистан</p><a href="#">Смотреть <br> видео</a>',
      ],
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
