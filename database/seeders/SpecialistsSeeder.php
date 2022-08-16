<?php

namespace Database\Seeders;

use App\Models\Specialist;
use Illuminate\Database\Seeder;

class SpecialistsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    foreach (range(1, 9) as $key) {
      foreach (config('app.available_locales') as $locale) {
        Specialist::create([
          'locale' => $locale,
          'position' => 'Руководитель вымешленого отдела счастья',
          'name' => 'Сухроб',
          'surname' => 'Мирзоев',
          'avatar' => 'avatar-1.jpg',
          'about' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim, vel nec nibh justo. Ornare arcu massa tellus augue. At odio sit leo, nulla vitae, diam. Risus interdum nunc massa sociis risus quis. Metus nunc, odio lacus, blandit dolor quis. Arcu pretium aenean morbi tincidunt malesuada suscipit facilisi. Tristique porta netus diam sit libero</p><p></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim, vel nec nibh justo. Ornare arcu massa tellus augue. At odio sit leo, nulla vitae, diam. Risus interdum nunc massa sociis risus quis. Metus nunc, odio lacus, blandit dolor quis. Arcu pretium aenean morbi tincidunt malesuada suscipit facilisi. Tristique porta netus diam sit libero</p><ol><li>Arcu pretium aenean morbi tincidunt malesuada suscipit facilisi.</li><li>Tristique porta netus diam sit libero</li><li>2. volutpat ac. Morbi lorem placerat maecenas at vitae</li><li>malesuada nunc. Sit pellentesque diam nunc</li><li>orci vitae. Aliquet auctor tortor, risus maecenas diam.</li><li>Rutrum at eget quam bibendum qua</li></ol>'
        ]);
      }
    }
  }
}
