<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $news_imgs = array(
      array('id' => '10', 'news_id' => '8', 'img' => '63203487d6141.jpg', 'description' => NULL, 'created_at' => '2022-09-13 07:43:03', 'updated_at' => '2022-09-13 07:43:03'),
      array('id' => '13', 'news_id' => '10', 'img' => '632067292adfc.jpg', 'description' => NULL, 'created_at' => '2022-09-13 11:19:05', 'updated_at' => '2022-09-13 11:19:05'),
      array('id' => '14', 'news_id' => '10', 'img' => '6320674979afe.jpg', 'description' => NULL, 'created_at' => '2022-09-13 11:19:37', 'updated_at' => '2022-09-13 11:19:37'),
      array('id' => '17', 'news_id' => '12', 'img' => '6321b5e032e9b.jpg', 'description' => NULL, 'created_at' => '2022-09-14 11:07:12', 'updated_at' => '2022-09-14 11:07:12'),
      array('id' => '18', 'news_id' => '12', 'img' => '6321b60f76a5b.jpg', 'description' => NULL, 'created_at' => '2022-09-14 11:07:59', 'updated_at' => '2022-09-14 11:07:59'),
      array('id' => '21', 'news_id' => '15', 'img' => '6321cf9a7c6d9.jpg', 'description' => NULL, 'created_at' => '2022-09-14 12:56:58', 'updated_at' => '2022-09-14 12:56:58'),
      array('id' => '22', 'news_id' => '16', 'img' => '6321d0cba07fc.jpg', 'description' => NULL, 'created_at' => '2022-09-14 13:02:03', 'updated_at' => '2022-09-14 13:02:03'),
      array('id' => '23', 'news_id' => '17', 'img' => '6321d1766ec70.jpg', 'description' => NULL, 'created_at' => '2022-09-14 13:04:54', 'updated_at' => '2022-09-14 13:04:54'),
      array('id' => '24', 'news_id' => '18', 'img' => '6321d2d7afb2d.jpg', 'description' => NULL, 'created_at' => '2022-09-14 13:10:47', 'updated_at' => '2022-09-14 13:10:47'),
      array('id' => '25', 'news_id' => '19', 'img' => '6321da0520536.jpg', 'description' => NULL, 'created_at' => '2022-09-14 13:41:25', 'updated_at' => '2022-09-14 13:41:25'),
      array('id' => '26', 'news_id' => '20', 'img' => '6321daa01ece8.jpg', 'description' => NULL, 'created_at' => '2022-09-14 13:44:00', 'updated_at' => '2022-09-14 13:44:00'),
      array('id' => '27', 'news_id' => '21', 'img' => '6321dbdfbfb6c.jpg', 'description' => NULL, 'created_at' => '2022-09-14 13:49:19', 'updated_at' => '2022-09-14 13:49:19'),
      array('id' => '28', 'news_id' => '21', 'img' => '6321dc1d7b387.jpg', 'description' => NULL, 'created_at' => '2022-09-14 13:50:21', 'updated_at' => '2022-09-14 13:50:21'),
      array('id' => '30', 'news_id' => '23', 'img' => '632837ad93c68.jpg', 'description' => NULL, 'created_at' => '2022-09-19 09:34:37', 'updated_at' => '2022-09-19 09:34:37'),
      array('id' => '32', 'news_id' => '25', 'img' => '63283de57a491.jpg', 'description' => NULL, 'created_at' => '2022-09-19 10:01:09', 'updated_at' => '2022-09-19 10:01:09'),
      array('id' => '33', 'news_id' => '25', 'img' => '63283e8816b26.jpg', 'description' => NULL, 'created_at' => '2022-09-19 10:03:52', 'updated_at' => '2022-09-19 10:03:52'),
      array('id' => '34', 'news_id' => '26', 'img' => '63283f82c65d2.jpg', 'description' => NULL, 'created_at' => '2022-09-19 10:08:02', 'updated_at' => '2022-09-19 10:08:02'),
      array('id' => '36', 'news_id' => '28', 'img' => '632841bbd8231.jpg', 'description' => NULL, 'created_at' => '2022-09-19 10:17:32', 'updated_at' => '2022-09-19 10:17:32'),
      array('id' => '37', 'news_id' => '28', 'img' => '63284229b9124.jpg', 'description' => NULL, 'created_at' => '2022-09-19 10:19:22', 'updated_at' => '2022-09-19 10:19:22'),
      array('id' => '38', 'news_id' => '29', 'img' => '632afc706bc8b.jpg', 'description' => NULL, 'created_at' => '2022-09-21 11:58:40', 'updated_at' => '2022-09-21 11:58:40'),
      array('id' => '41', 'news_id' => '31', 'img' => '632b007e7eb96.jpg', 'description' => NULL, 'created_at' => '2022-09-21 12:15:58', 'updated_at' => '2022-09-21 12:15:58'),
      array('id' => '42', 'news_id' => '31', 'img' => '632b00981ab2e.jpg', 'description' => NULL, 'created_at' => '2022-09-21 12:16:24', 'updated_at' => '2022-09-21 12:16:24'),
      array('id' => '43', 'news_id' => '32', 'img' => '632b010651019.jpg', 'description' => NULL, 'created_at' => '2022-09-21 12:18:14', 'updated_at' => '2022-09-21 12:18:14'),
      array('id' => '44', 'news_id' => '32', 'img' => '632b01347ab3f.jpg', 'description' => NULL, 'created_at' => '2022-09-21 12:19:00', 'updated_at' => '2022-09-21 12:19:00'),
      array('id' => '45', 'news_id' => '33', 'img' => '632b027e91989.jpg', 'description' => NULL, 'created_at' => '2022-09-21 12:24:30', 'updated_at' => '2022-09-21 12:24:30'),
      array('id' => '46', 'news_id' => '33', 'img' => '632b02a866045.jpg', 'description' => NULL, 'created_at' => '2022-09-21 12:25:12', 'updated_at' => '2022-09-21 12:25:12'),
      array('id' => '58', 'news_id' => '42', 'img' => '632ed1a380cf1.png', 'description' => NULL, 'created_at' => '2022-09-24 09:45:07', 'updated_at' => '2022-09-24 09:45:07'),
      array('id' => '67', 'news_id' => '47', 'img' => '632edad321ddf.png', 'description' => NULL, 'created_at' => '2022-09-24 10:24:19', 'updated_at' => '2022-09-24 10:24:19'),
      array('id' => '68', 'news_id' => '48', 'img' => '632edb8fa9812.png', 'description' => NULL, 'created_at' => '2022-09-24 10:27:27', 'updated_at' => '2022-09-24 10:27:27'),
      array('id' => '73', 'news_id' => '53', 'img' => '632eee4acb4a6.jpg', 'description' => NULL, 'created_at' => '2022-09-24 11:47:23', 'updated_at' => '2022-09-24 11:47:23'),
      array('id' => '76', 'news_id' => '56', 'img' => '63319ce6023a3.png', 'description' => NULL, 'created_at' => '2022-09-26 12:36:54', 'updated_at' => '2022-09-26 12:36:54'),
      array('id' => '78', 'news_id' => '57', 'img' => '6331a2406a8d3.jpg', 'description' => NULL, 'created_at' => '2022-09-26 12:59:44', 'updated_at' => '2022-09-26 12:59:44'),
      array('id' => '79', 'news_id' => '57', 'img' => '6331a262d7c88.jpg', 'description' => NULL, 'created_at' => '2022-09-26 13:00:19', 'updated_at' => '2022-09-26 13:00:19'),
      array('id' => '80', 'news_id' => '57', 'img' => '6331a2630e430.jpg', 'description' => NULL, 'created_at' => '2022-09-26 13:00:19', 'updated_at' => '2022-09-26 13:00:19'),
      array('id' => '81', 'news_id' => '58', 'img' => '6331a595c85f4.jpg', 'description' => NULL, 'created_at' => '2022-09-26 13:13:57', 'updated_at' => '2022-09-26 13:13:57'),
      array('id' => '82', 'news_id' => '58', 'img' => '6331a5cb41cfa.jpg', 'description' => NULL, 'created_at' => '2022-09-26 13:14:51', 'updated_at' => '2022-09-26 13:14:51'),
      array('id' => '83', 'news_id' => '58', 'img' => '6331a5cb6a4e4.jpg', 'description' => NULL, 'created_at' => '2022-09-26 13:14:51', 'updated_at' => '2022-09-26 13:14:51'),
      array('id' => '84', 'news_id' => '58', 'img' => '6331a5cb89066.jpg', 'description' => NULL, 'created_at' => '2022-09-26 13:14:51', 'updated_at' => '2022-09-26 13:14:51'),
      array('id' => '85', 'news_id' => '58', 'img' => '6331a5cba9c21.jpg', 'description' => NULL, 'created_at' => '2022-09-26 13:14:51', 'updated_at' => '2022-09-26 13:14:51'),
      array('id' => '86', 'news_id' => '58', 'img' => '6331a5cbc3501.jpg', 'description' => NULL, 'created_at' => '2022-09-26 13:14:51', 'updated_at' => '2022-09-26 13:14:51'),
      array('id' => '87', 'news_id' => '58', 'img' => '6331a5cbe072d.jpg', 'description' => NULL, 'created_at' => '2022-09-26 13:14:52', 'updated_at' => '2022-09-26 13:14:52'),
      array('id' => '97', 'news_id' => '68', 'img' => '633293c906663.jpg', 'description' => NULL, 'created_at' => '2022-09-27 06:10:17', 'updated_at' => '2022-09-27 06:10:17'),
      array('id' => '98', 'news_id' => '68', 'img' => '633293fde62b1.jpg', 'description' => NULL, 'created_at' => '2022-09-27 06:11:10', 'updated_at' => '2022-09-27 06:11:10'),
      array('id' => '99', 'news_id' => '68', 'img' => '633293fe03e52.jpg', 'description' => NULL, 'created_at' => '2022-09-27 06:11:10', 'updated_at' => '2022-09-27 06:11:10'),
      array('id' => '100', 'news_id' => '68', 'img' => '633293fe12a92.jpg', 'description' => NULL, 'created_at' => '2022-09-27 06:11:10', 'updated_at' => '2022-09-27 06:11:10'),
      array('id' => '101', 'news_id' => '68', 'img' => '633293fe210d9.jpg', 'description' => NULL, 'created_at' => '2022-09-27 06:11:10', 'updated_at' => '2022-09-27 06:11:10'),
      array('id' => '102', 'news_id' => '68', 'img' => '633293fe2f6d3.jpg', 'description' => NULL, 'created_at' => '2022-09-27 06:11:10', 'updated_at' => '2022-09-27 06:11:10'),
      array('id' => '103', 'news_id' => '68', 'img' => '633293fe3f52e.jpg', 'description' => NULL, 'created_at' => '2022-09-27 06:11:10', 'updated_at' => '2022-09-27 06:11:10'),
      array('id' => '104', 'news_id' => '68', 'img' => '63329406e14d5.jpg', 'description' => NULL, 'created_at' => '2022-09-27 06:11:19', 'updated_at' => '2022-09-27 06:11:19'),
      array('id' => '110', 'news_id' => '69', 'img' => '633295e459cac.jpg', 'description' => NULL, 'created_at' => '2022-09-27 06:19:16', 'updated_at' => '2022-09-27 06:19:16'),
      array('id' => '111', 'news_id' => '69', 'img' => '63329602ecb6d.jpg', 'description' => NULL, 'created_at' => '2022-09-27 06:19:47', 'updated_at' => '2022-09-27 06:19:47'),
      array('id' => '112', 'news_id' => '69', 'img' => '6332960306dfc.jpg', 'description' => NULL, 'created_at' => '2022-09-27 06:19:47', 'updated_at' => '2022-09-27 06:19:47'),
      array('id' => '113', 'news_id' => '69', 'img' => '6332960312774.jpg', 'description' => NULL, 'created_at' => '2022-09-27 06:19:47', 'updated_at' => '2022-09-27 06:19:47'),
      array('id' => '114', 'news_id' => '69', 'img' => '633296031da7b.jpg', 'description' => NULL, 'created_at' => '2022-09-27 06:19:47', 'updated_at' => '2022-09-27 06:19:47'),
      array('id' => '115', 'news_id' => '69', 'img' => '63329603293c0.jpg', 'description' => NULL, 'created_at' => '2022-09-27 06:19:47', 'updated_at' => '2022-09-27 06:19:47'),
      array('id' => '116', 'news_id' => '70', 'img' => '633297c3a7a74.jpg', 'description' => NULL, 'created_at' => '2022-09-27 06:27:15', 'updated_at' => '2022-09-27 06:27:15'),
      array('id' => '117', 'news_id' => '71', 'img' => '633299317ed92.jpg', 'description' => NULL, 'created_at' => '2022-09-27 06:33:21', 'updated_at' => '2022-09-27 06:33:21'),
      array('id' => '132', 'news_id' => '83', 'img' => '6332f4e0e87a0.jpg', 'description' => NULL, 'created_at' => '2022-09-27 13:04:33', 'updated_at' => '2022-09-27 13:04:33'),
      array('id' => '133', 'news_id' => '83', 'img' => '6332f5c6df95f.jpg', 'description' => NULL, 'created_at' => '2022-09-27 13:08:23', 'updated_at' => '2022-09-27 13:08:23'),
      array('id' => '134', 'news_id' => '83', 'img' => '6332f5c7c747d.jpg', 'description' => NULL, 'created_at' => '2022-09-27 13:08:23', 'updated_at' => '2022-09-27 13:08:23'),
      array('id' => '135', 'news_id' => '83', 'img' => '6332f5c7d11e8.jpg', 'description' => NULL, 'created_at' => '2022-09-27 13:08:23', 'updated_at' => '2022-09-27 13:08:23'),
      array('id' => '136', 'news_id' => '83', 'img' => '6332f6256d86d.jpg', 'description' => NULL, 'created_at' => '2022-09-27 13:09:58', 'updated_at' => '2022-09-27 13:09:58'),
      array('id' => '137', 'news_id' => '83', 'img' => '6332f62663a15.jpg', 'description' => NULL, 'created_at' => '2022-09-27 13:09:59', 'updated_at' => '2022-09-27 13:09:59'),
      array('id' => '138', 'news_id' => '83', 'img' => '6332f6273bc97.jpg', 'description' => NULL, 'created_at' => '2022-09-27 13:10:00', 'updated_at' => '2022-09-27 13:10:00'),
      array('id' => '139', 'news_id' => '84', 'img' => '6332f74a27b39.jpg', 'description' => NULL, 'created_at' => '2022-09-27 13:14:50', 'updated_at' => '2022-09-27 13:14:50'),
      array('id' => '140', 'news_id' => '84', 'img' => '6332f74a3be22.jpg', 'description' => NULL, 'created_at' => '2022-09-27 13:14:50', 'updated_at' => '2022-09-27 13:14:50'),
      array('id' => '141', 'news_id' => '84', 'img' => '6332f74a47fbe.jpg', 'description' => NULL, 'created_at' => '2022-09-27 13:14:50', 'updated_at' => '2022-09-27 13:14:50'),
      array('id' => '146', 'news_id' => '87', 'img' => '633aec1d92d70.jpg', 'description' => NULL, 'created_at' => '2022-10-03 14:05:17', 'updated_at' => '2022-10-03 14:05:17'),
      array('id' => '148', 'news_id' => '57', 'img' => '633c1339389d2.jpg', 'description' => NULL, 'created_at' => '2022-10-04 11:04:25', 'updated_at' => '2022-10-04 11:04:25'),
      array('id' => '149', 'news_id' => '6', 'img' => '633c1e1612196.jpg', 'description' => NULL, 'created_at' => '2022-10-04 11:50:46', 'updated_at' => '2022-10-04 11:50:46'),
      array('id' => '151', 'news_id' => '5', 'img' => '633c1ea2efb0c.png', 'description' => NULL, 'created_at' => '2022-10-04 11:53:07', 'updated_at' => '2022-10-04 11:53:07'),
      array('id' => '152', 'news_id' => '20', 'img' => '633c3132e2115.jpg', 'description' => NULL, 'created_at' => '2022-10-04 13:12:19', 'updated_at' => '2022-10-04 13:12:19'),
      array('id' => '153', 'news_id' => '33', 'img' => '633c3b792d244.jpg', 'description' => NULL, 'created_at' => '2022-10-04 13:56:09', 'updated_at' => '2022-10-04 13:56:09'),
      array('id' => '154', 'news_id' => '33', 'img' => '633c3b794f503.jpg', 'description' => NULL, 'created_at' => '2022-10-04 13:56:09', 'updated_at' => '2022-10-04 13:56:09'),
      array('id' => '155', 'news_id' => '33', 'img' => '633c3b796fc2d.jpg', 'description' => NULL, 'created_at' => '2022-10-04 13:56:09', 'updated_at' => '2022-10-04 13:56:09'),
      array('id' => '156', 'news_id' => '40', 'img' => '633c40cb69359.jpg', 'description' => NULL, 'created_at' => '2022-10-04 14:18:51', 'updated_at' => '2022-10-04 14:18:51'),
      array('id' => '157', 'news_id' => '40', 'img' => '633c414935695.jpg', 'description' => NULL, 'created_at' => '2022-10-04 14:20:57', 'updated_at' => '2022-10-04 14:20:57'),
      array('id' => '158', 'news_id' => '88', 'img' => '63458204c84a1.jpg', 'description' => NULL, 'created_at' => '2022-10-11 14:47:32', 'updated_at' => '2022-10-11 14:47:32')
    );

    $contribution_images = array(
      array('id' => '27', 'contribution_id' => '7', 'img' => '633aa5c24b3ac.jpg', 'description' => NULL, 'created_at' => '2022-10-03 09:05:06', 'updated_at' => '2022-10-03 09:05:06'),
      array('id' => '28', 'contribution_id' => '7', 'img' => '633aa5c2710eb.jpg', 'description' => NULL, 'created_at' => '2022-10-03 09:05:06', 'updated_at' => '2022-10-03 09:05:06'),
      array('id' => '29', 'contribution_id' => '7', 'img' => '633aa5c2961e5.jpg', 'description' => NULL, 'created_at' => '2022-10-03 09:05:06', 'updated_at' => '2022-10-03 09:05:06'),
      array('id' => '30', 'contribution_id' => '7', 'img' => '633aa5c2b3818.jpg', 'description' => NULL, 'created_at' => '2022-10-03 09:05:07', 'updated_at' => '2022-10-03 09:05:07'),
      array('id' => '31', 'contribution_id' => '8', 'img' => '633ab20099315.jpg', 'description' => NULL, 'created_at' => '2022-10-03 09:57:20', 'updated_at' => '2022-10-03 09:57:20'),
      array('id' => '32', 'contribution_id' => '8', 'img' => '633ab200bea53.jpg', 'description' => NULL, 'created_at' => '2022-10-03 09:57:20', 'updated_at' => '2022-10-03 09:57:20'),
      array('id' => '33', 'contribution_id' => '8', 'img' => '633ab200eac66.jpg', 'description' => NULL, 'created_at' => '2022-10-03 09:57:21', 'updated_at' => '2022-10-03 09:57:21'),
      array('id' => '34', 'contribution_id' => '8', 'img' => '633ab20124662.jpg', 'description' => NULL, 'created_at' => '2022-10-03 09:57:21', 'updated_at' => '2022-10-03 09:57:21'),
      array('id' => '36', 'contribution_id' => '10', 'img' => '6347fa4b1fb55.jpg', 'description' => NULL, 'created_at' => '2022-10-13 11:45:16', 'updated_at' => '2022-10-13 11:45:16'),
      array('id' => '37', 'contribution_id' => '11', 'img' => '63480aefa9289.jpg', 'description' => NULL, 'created_at' => '2022-10-13 12:56:17', 'updated_at' => '2022-10-13 12:56:17'),
      array('id' => '38', 'contribution_id' => '12', 'img' => '634a8b0c79475.jpg', 'description' => NULL, 'created_at' => '2022-10-15 10:27:24', 'updated_at' => '2022-10-15 10:27:24'),
      array('id' => '40', 'contribution_id' => '13', 'img' => '634a9209caeeb.jpg', 'description' => NULL, 'created_at' => '2022-10-15 10:57:13', 'updated_at' => '2022-10-15 10:57:13')
    );

    foreach ($news_imgs as $image) {
      Image::create([
        'news_id' => $image['news_id'],
        'src' => 'img/news/' . $image['img'],
        'thumb_src' => 'img/news/thumbs/' . $image['img'],
      ]);
    }

    foreach ($contribution_images as $image) {
      Image::create([
        'contribution_id' => $image['contribution_id'],
        'src' => 'img/contributions/' . $image['img'],
        'thumb_src' => 'img/contributions/thumbs/' . $image['img'],
      ]);
    }
  }
}
