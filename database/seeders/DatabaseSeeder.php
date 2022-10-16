<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    User::create([
      'login' => 'admin@koinot.tj',
      'role' => 'admin',
      'password' => bcrypt('2j@H#130'),
    ]);

    $this->call([
      BannersSeeder::class,
      HistoriesSeeder::class,
      NewsSeeder::class,
      ImagesSeeder::class,
      ProjectsSeeder::class,
      ContributionsSeeder::class,
    ]);
  }
}
