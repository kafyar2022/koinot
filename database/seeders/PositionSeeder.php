<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    foreach (config('app.available_locales') as $locale) {
      Position::create([
        'locale' => $locale,
        'title' => 'Руководитель вымешленого отдела счастья'
      ]);
    }
  }
}
