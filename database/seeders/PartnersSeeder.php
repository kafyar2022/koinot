<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnersSeeder extends Seeder
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
          Partner::create([
            'locale' => $locale,
            'title' => $partner['title'],
            'logo' => $partner['logo'],
            'url' => $partner['url']
          ]);
        }
      }
    }
  }
}
