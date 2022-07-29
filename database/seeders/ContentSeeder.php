<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $contents = [
      [
        'slug' => 'main-page-board',
        'page' => 'main',
        'content' => '',
      ], [
        'slug' => 'main-page-management',
        'page' => 'main',
        'content' => '',
      ], [
        'slug' => 'main-page-investors',
        'page' => 'main',
        'content' => '',
      ], [
        'slug' => 'main-page-contribution',
        'page' => 'main',
        'content' => '',
      ], [
        'slug' => 'main-page-opportunity',
        'page' => 'main',
        'content' => '',
      ], [
        'slug' => 'main-page-news',
        'page' => 'main',
        'content' => '',
      ], [
        'slug' => 'main-page-projects',
        'page' => 'main',
        'content' => '',
      ], [
        'slug' => 'history-page-board',
        'page' => 'about.history',
        'content' => '',
      ], [
        'slug' => 'history-page-content',
        'page' => 'about.history',
        'content' => '',
      ], [
        'slug' => 'management-page-board',
        'page' => 'about.management',
        'content' => '',
      ], [
        'slug' => 'management-page-specialists',
        'page' => 'about.management',
        'content' => '',
      ], [
        'slug' => 'mission-page-board',
        'page' => 'about.mission',
        'content' => '',
      ], [
        'slug' => 'mission-page-mission',
        'page' => 'about.mission',
        'content' => '',
      ], [
        'slug' => 'mission-page-vision-board',
        'page' => 'about.mission',
        'content' => '',
      ], [
        'slug' => 'mission-page-vision',
        'page' => 'about.mission',
        'content' => '',
      ], [
        'slug' => 'mission-page-values-board',
        'page' => 'about.mission',
        'content' => '',
      ], [
        'slug' => 'mission-page-value-1',
        'page' => 'about.mission',
        'content' => '',
      ], [
        'slug' => 'mission-page-value-2',
        'page' => 'about.mission',
        'content' => '',
      ], [
        'slug' => 'mission-page-value-3',
        'page' => 'about.mission',
        'content' => '',
      ], [
        'slug' => 'mission-page-value-4',
        'page' => 'about.mission',
        'content' => '',
      ], [
        'slug' => 'mission-page-value-5',
        'page' => 'about.mission',
        'content' => '',
      ], [
        'slug' => 'mission-page-value-6',
        'page' => 'about.mission',
        'content' => '',
      ], [
        'slug' => 'mission-page-values',
        'page' => 'about.mission',
        'content' => '',
      ], [
        'slug' => 'news-page-board',
        'page' => 'news',
        'content' => '',
      ], [
        'slug' => 'news-page-content',
        'page' => 'news',
        'content' => '',
      ], [
        'slug' => 'news-show-page',
        'page' => 'news.show',
        'content' => '',
      ], [
        'slug' => 'projects-page-board',
        'page' => 'projects',
        'content' => '',
      ], [
        'slug' => 'projects-by-us-page-board',
        'page' => 'projects.by-us',
        'content' => '',
      ], [
        'slug' => 'projects-with-us-page-board',
        'page' => 'projects.with-us',
        'content' => '',
      ], [
        'slug' => 'projects-page',
        'page' => 'projects',
        'content' => '',
      ], [
        'slug' => 'projects-by-us-page',
        'page' => 'projects.by-us',
        'content' => '',
      ], [
        'slug' => 'projects-with-us-page',
        'page' => 'projects.with-us',
        'content' => '',
      ], [
        'slug' => 'investors-page-board',
        'page' => 'partnership.investors',
        'content' => '',
      ], [
        'slug' => 'investors-page-about',
        'page' => 'partnership.investors',
        'content' => '',
      ], [
        'slug' => 'investors-page-connection',
        'page' => 'partnership.investors',
        'content' => '',
      ], [
        'slug' => 'startups-page-board',
        'page' => 'partnership.startups',
        'content' => '',
      ], [
        'slug' => 'startups-page',
        'page' => 'partnership.startups',
        'content' => '',
      ], [
        'slug' => 'startups-page-form',
        'page' => 'partnership.startups',
        'content' => '',
      ], [
        'slug' => 'startups-page-connection',
        'page' => 'partnership.startups',
        'content' => '',
      ], [
        'slug' => 'contribution-page-board',
        'page' => 'contribution',
        'content' => '',
      ], [
        'slug' => 'contribution-page',
        'page' => 'contribution',
        'content' => '',
      ], [
        'slug' => 'contribution-show-page',
        'page' => 'contribution.show',
        'content' => '',
      ], [
        'slug' => 'contacts-page-office',
        'page' => 'contacts',
        'content' => '',
      ], [
        'slug' => 'contacts-page-connection',
        'page' => 'contacts',
        'content' => '',
      ], [
        'slug' => 'carrier-page-board',
        'page' => 'carrier',
        'content' => '',
      ], [
        'slug' => 'carrier-page-formula',
        'page' => 'carrier',
        'content' => '',
      ], [
        'slug' => 'carrier-page-principles',
        'page' => 'carrier',
        'content' => '',
      ], [
        'slug' => 'carrier-page-internship',
        'page' => 'carrier',
        'content' => '',
      ], [
        'slug' => 'test-page-board',
        'page' => 'carrier.test',
        'content' => '',
      ], [
        'slug' => 'test-page-stages',
        'page' => 'carrier.test',
        'content' => '',
      ], [
        'slug' => 'test-page-test',
        'page' => 'carrier.test',
        'content' => '',
      ], [
        'slug' => 'test-page-form',
        'page' => 'carrier.test',
        'content' => '',
      ],
    ];

    foreach ($contents as $content) {
      foreach (config('app.available_locales') as $locale) {
        Content::create([
          'locale' => $locale,
          'slug' => $content['slug'] . '-' . $locale,
          'page' => $content['page'],
          'content' => $content['content'],
        ]);
      }
    }
  }
}
