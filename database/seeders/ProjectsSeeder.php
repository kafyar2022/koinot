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
    $projects = array(
      array('id' => '1', 'locale' => 'ru', 'by_us' => '1', 'title' => 'Франчайзи Компании 1С', 'logo' => '633a85db11e92.png', 'url' => 'https://kit.tj/', 'created_at' => '2022-09-26 10:23:57', 'updated_at' => '2022-10-03 06:48:59'),
      array('id' => '3', 'locale' => 'ru', 'by_us' => '0', 'title' => 'Тренинг центр «AtS»', 'logo' => '634bc706895d7.png', 'url' => 'https://ats.tj/', 'created_at' => '2022-09-26 10:34:20', 'updated_at' => '2022-10-16 08:55:34'),
      array('id' => '4', 'locale' => 'ru', 'by_us' => '1', 'title' => '«Хирад»', 'logo' => '633a85ac20f97.png', 'url' => 'https://khirad.tj/', 'created_at' => '2022-09-26 10:40:55', 'updated_at' => '2022-10-03 06:48:12'),
      array('id' => '5', 'locale' => 'ru', 'by_us' => '0', 'title' => 'Интернет-аптека Salomat', 'logo' => '633a859d204a4.png', 'url' => 'https://www.salomat.tj', 'created_at' => '2022-09-26 10:45:47', 'updated_at' => '2022-10-03 06:47:57'),
      array('id' => '8', 'locale' => 'ru', 'by_us' => '1', 'title' => 'Дусти Фарма', 'logo' => '634692cfd9c1e.png', 'url' => 'https://dustipharma.tj/', 'created_at' => '2022-10-12 10:11:27', 'updated_at' => '2022-10-12 10:11:27'),
      array('id' => '9', 'locale' => 'ru', 'by_us' => '1', 'title' => 'Тадж Моторс', 'logo' => '6346939621377.png', 'url' => 'https://www.facebook.com/ToyotaTajMotors/', 'created_at' => '2022-10-12 10:14:46', 'updated_at' => '2022-10-12 10:14:46'),
      array('id' => '10', 'locale' => 'ru', 'by_us' => '1', 'title' => 'Хонаи Ман', 'logo' => '634693ea087f8.png', 'url' => 'http://honaiman.tj/', 'created_at' => '2022-10-12 10:16:10', 'updated_at' => '2022-10-12 10:16:10'),
      array('id' => '11', 'locale' => 'ru', 'by_us' => '1', 'title' => 'JYSK', 'logo' => '6346942c0868a.png', 'url' => 'http://jysk.tj/', 'created_at' => '2022-10-12 10:17:16', 'updated_at' => '2022-10-12 10:17:16'),
      array('id' => '12', 'locale' => 'ru', 'by_us' => '1', 'title' => 'Мадад Фарм', 'logo' => '634694f5e3f75.png', 'url' => 'https://madadpharm.tj/', 'created_at' => '2022-10-12 10:20:37', 'updated_at' => '2022-10-12 10:20:37'),
      array('id' => '13', 'locale' => 'ru', 'by_us' => '0', 'title' => 'Ёвар', 'logo' => '634696ce993a1.png', 'url' => 'https://evar.tj/', 'created_at' => '2022-10-12 10:22:44', 'updated_at' => '2022-10-12 10:28:30')
    );

    foreach ($projects as $project) {
      Project::create([
        'title' => $project['title'],
        'logo' => 'img/projects/' . $project['logo'],
        'url' => $project['url']
      ]);
    }
  }
}
