<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $partners = [
      [
        'title' => 'Хонаи Ман',
        'logo' => 'honai-man.png',
        'url' => 'http://honaiman.tj/'
      ], [
        'title' => 'ООО "Дусти фарм"',
        'logo' => 'dusti-pharma.png',
        'url' => 'http://honaiman.tj/'
      ], [
        'title' => 'Ёвар',
        'logo' => 'evar.png',
        'url' => 'https://evar.tj/'
      ], [
        'title' => 'Тойота',
        'logo' => 'toyota.png',
        'url' => 'https://evar.tj/'
      ]
    ];

    foreach (range(1, 27) as $key) {
      foreach (config('app.available_locales') as $locale) {
        foreach ($partners as $partner) {
          Project::create([
            'locale' => $locale,
            'by_us' => $key % 2,
            'title' => $partner['title'],
            'logo' => $partner['logo'],
            'url' => $partner['url']
          ]);
        }
      }
    }
  }
}
