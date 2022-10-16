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
    $banners = array(
      array('id' => '43', 'page' => 'main', 'img' => '633a7318d7071.jpg', 'created_at' => '2022-10-03 05:28:57', 'updated_at' => '2022-10-03 05:28:57'),
      array('id' => '44', 'page' => 'main', 'img' => '633a736448232.jpg', 'created_at' => '2022-10-03 05:30:12', 'updated_at' => '2022-10-03 05:30:12'),
      array('id' => '45', 'page' => 'main', 'img' => '633a76512f65a.jpg', 'created_at' => '2022-10-03 05:42:41', 'updated_at' => '2022-10-03 05:42:41'),
      array('id' => '46', 'page' => 'main', 'img' => '633a76be9638b.jpg', 'created_at' => '2022-10-03 05:44:30', 'updated_at' => '2022-10-03 05:44:30'),
      array('id' => '47', 'page' => 'main', 'img' => '633a77935fc2e.jpg', 'created_at' => '2022-10-03 05:48:03', 'updated_at' => '2022-10-03 05:48:03'),
      array('id' => '48', 'page' => 'main', 'img' => '633a78059d9d3.jpg', 'created_at' => '2022-10-03 05:49:57', 'updated_at' => '2022-10-03 05:49:57'),
      array('id' => '49', 'page' => 'main', 'img' => '633a78bde739d.jpg', 'created_at' => '2022-10-03 05:53:02', 'updated_at' => '2022-10-03 05:53:02'),
      array('id' => '50', 'page' => 'main', 'img' => '633a79b2df2b0.jpg', 'created_at' => '2022-10-03 05:57:07', 'updated_at' => '2022-10-03 05:57:07'),
      array('id' => '51', 'page' => 'main', 'img' => '633a7a1fd9c9f.jpg', 'created_at' => '2022-10-03 05:58:56', 'updated_at' => '2022-10-03 05:58:56'),
      array('id' => '53', 'page' => 'news', 'img' => '633a7bbee7758.jpg', 'created_at' => '2022-10-03 06:05:51', 'updated_at' => '2022-10-03 06:05:51'),
      array('id' => '59', 'page' => 'projects', 'img' => '63455c0d0e9a3.jpg', 'created_at' => '2022-10-11 12:05:33', 'updated_at' => '2022-10-11 12:05:33'),
      array('id' => '60', 'page' => 'projects', 'img' => '63455cb0b9f53.jpg', 'created_at' => '2022-10-11 12:08:16', 'updated_at' => '2022-10-11 12:08:16'),
      array('id' => '61', 'page' => 'projects', 'img' => '63455f267c7b9.jpg', 'created_at' => '2022-10-11 12:18:46', 'updated_at' => '2022-10-11 12:18:46'),
      array('id' => '62', 'page' => 'projects', 'img' => '63456236d620f.jpg', 'created_at' => '2022-10-11 12:31:55', 'updated_at' => '2022-10-11 12:31:55'),
      array('id' => '63', 'page' => 'projects', 'img' => '6345638517300.jpg', 'created_at' => '2022-10-11 12:37:30', 'updated_at' => '2022-10-11 12:37:30'),
      array('id' => '64', 'page' => 'projects', 'img' => '6345643c0a921.jpg', 'created_at' => '2022-10-11 12:40:28', 'updated_at' => '2022-10-11 12:40:28'),
      array('id' => '65', 'page' => 'projects', 'img' => '634564ebb3b70.jpg', 'created_at' => '2022-10-11 12:43:23', 'updated_at' => '2022-10-11 12:43:23'),
      array('id' => '73', 'page' => 'news', 'img' => '63456d057284c.jpg', 'created_at' => '2022-10-11 13:17:57', 'updated_at' => '2022-10-11 13:17:57'),
      array('id' => '74', 'page' => 'news', 'img' => '63456d7f9f608.jpg', 'created_at' => '2022-10-11 13:19:59', 'updated_at' => '2022-10-11 13:19:59'),
      array('id' => '75', 'page' => 'news', 'img' => '63456eb59d62d.jpg', 'created_at' => '2022-10-11 13:25:09', 'updated_at' => '2022-10-11 13:25:09'),
      array('id' => '76', 'page' => 'carrier', 'img' => '6345701c16e74.jpg', 'created_at' => '2022-10-11 13:31:08', 'updated_at' => '2022-10-11 13:31:08'),
      array('id' => '78', 'page' => 'carrier', 'img' => '634570bdb99f3.jpg', 'created_at' => '2022-10-11 13:33:49', 'updated_at' => '2022-10-11 13:33:49'),
      array('id' => '79', 'page' => 'carrier', 'img' => '6345714a0eb1b.jpg', 'created_at' => '2022-10-11 13:36:10', 'updated_at' => '2022-10-11 13:36:10'),
      array('id' => '80', 'page' => 'carrier', 'img' => '6345719e4bd04.jpg', 'created_at' => '2022-10-11 13:37:34', 'updated_at' => '2022-10-11 13:37:34'),
      array('id' => '81', 'page' => 'carrier', 'img' => '6345731d0e776.jpg', 'created_at' => '2022-10-11 13:43:57', 'updated_at' => '2022-10-11 13:43:57'),
      array('id' => '82', 'page' => 'carrier', 'img' => '634573bde4048.jpg', 'created_at' => '2022-10-11 13:46:38', 'updated_at' => '2022-10-11 13:46:38'),
      array('id' => '83', 'page' => 'carrier', 'img' => '6345743c098fb.jpg', 'created_at' => '2022-10-11 13:48:44', 'updated_at' => '2022-10-11 13:48:44'),
      array('id' => '84', 'page' => 'carrier', 'img' => '6345769044158.jpg', 'created_at' => '2022-10-11 13:58:40', 'updated_at' => '2022-10-11 13:58:40'),
      array('id' => '91', 'page' => 'carrier', 'img' => '634a9208e652e.jpg', 'created_at' => '2022-10-15 10:57:13', 'updated_at' => '2022-10-15 10:57:13'),
      array('id' => '92', 'page' => 'carrier', 'img' => '634bb9b9b4ca6.jpg', 'created_at' => '2022-10-16 07:58:49', 'updated_at' => '2022-10-16 07:58:49'),
      array('id' => '93', 'page' => 'carrier', 'img' => '634bba1d9f77b.jpg', 'created_at' => '2022-10-16 08:00:29', 'updated_at' => '2022-10-16 08:00:29'),
      array('id' => '94', 'page' => 'carrier', 'img' => '634bba3870ee1.jpg', 'created_at' => '2022-10-16 08:00:56', 'updated_at' => '2022-10-16 08:00:56'),
      array('id' => '95', 'page' => 'contributions', 'img' => '634bba96aa97f.jpg', 'created_at' => '2022-10-16 08:02:30', 'updated_at' => '2022-10-16 08:02:30'),
      array('id' => '96', 'page' => 'contributions', 'img' => '634bbad58e704.jpg', 'created_at' => '2022-10-16 08:03:33', 'updated_at' => '2022-10-16 08:03:33'),
      array('id' => '97', 'page' => 'contributions', 'img' => '634bbb3d7cca6.jpg', 'created_at' => '2022-10-16 08:05:17', 'updated_at' => '2022-10-16 08:05:17'),
      array('id' => '98', 'page' => 'contributions', 'img' => '634bbb4ab8a7a.jpg', 'created_at' => '2022-10-16 08:05:30', 'updated_at' => '2022-10-16 08:05:30'),
      array('id' => '99', 'page' => 'contributions', 'img' => '634bbb571ca42.jpg', 'created_at' => '2022-10-16 08:05:43', 'updated_at' => '2022-10-16 08:05:43'),
      array('id' => '100', 'page' => 'contributions', 'img' => '634bbb636597a.jpg', 'created_at' => '2022-10-16 08:05:55', 'updated_at' => '2022-10-16 08:05:55')
    );

    foreach ($banners as $banner) {
      Banner::create([
        'page' => $banner['page'],
        'img' => 'img/banners/' . $banner['img'],
      ]);
    }
  }
}
