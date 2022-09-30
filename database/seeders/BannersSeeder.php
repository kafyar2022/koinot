<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannersSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    foreach (range(1, 3) as $key) {
      Banner::create(['page' => 'main']);
    }
    foreach (range(1, 3) as $key) {
      Banner::create(['page' => 'about.management']);
    }
    foreach (range(1, 3) as $key) {
      Banner::create(['page' => 'news']);
    }
    foreach (range(1, 3) as $key) {
      Banner::create(['page' => 'projects']);
    }
    foreach (range(1, 3) as $key) {
      Banner::create(['page' => 'contributions']);
    }
    foreach (range(1, 3) as $key) {
      Banner::create(['page' => 'carrier']);
    }
    foreach (range(1, 3) as $key) {
      Banner::create(['page' => 'carrier.test']);
    }
  }
}
