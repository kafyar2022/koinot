<?php

namespace Database\Seeders;

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
    $this->call([
      ContentSeeder::class,
      HistoriesSeeder::class,
      NewsSeeder::class,
      ProjectsSeeder::class,
      SpecialistsSeeder::class,
      PositionSeeder::class,
      ContributionsSeeder::class,
    ]);
  }
}
