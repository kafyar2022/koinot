<?php

namespace Database\Seeders;

use App\Models\Text;
use Illuminate\Database\Seeder;

class TextsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $texts = [
      [
        'slug' => 'details-email-ru',
        'page' => null,
        'text' => 'info@koinotinav.tj',
      ], [
        'slug' => 'details-phone-ru',
        'page' => null,
        'text' => '+992 918 55 64 64',
      ], [
        'slug' => 'contacts-investors-term-ru',
        'page' => null,
        'text' => 'Инвесторам',
      ], [
        'slug' => 'contacts-investors-phone-ru',
        'page' => null,
        'text' => '+992 (44) 000 000',
      ], [
        'slug' => 'contacts-investors-email-ru',
        'page' => null,
        'text' => 'invest@koinotinav.tj',
      ], [
        'slug' => 'contacts-partnership-term-ru',
        'page' => null,
        'text' => 'Партнерство',
      ], [
        'slug' => 'contacts-partnership-phone-ru',
        'page' => null,
        'text' => '+992 (44) 000 000',
      ], [
        'slug' => 'contacts-partnership-email-ru',
        'page' => null,
        'text' => 'partner@koinotinav.tj',
      ], [
        'slug' => 'contacts-other-term-ru',
        'page' => null,
        'text' => 'Общие вопросы',
      ], [
        'slug' => 'contacts-other-phone-ru',
        'page' => null,
        'text' => '+992 (44) 000 000',
      ], [
        'slug' => 'contacts-other-email-ru',
        'page' => null,
        'text' => 'info@koinotinav.tj',
      ], [
        'slug' => 'carrier-page-formula-1-ru',
        'page' => 'carrier',
        'text' => 'Высокая мотивация и вдохновение',
      ], [
        'slug' => 'carrier-page-formula-2-ru',
        'page' => 'carrier',
        'text' => 'Высокая мотивация и вдохновение',
      ], [
        'slug' => 'carrier-page-formula-3-ru',
        'page' => 'carrier',
        'text' => 'Высокая мотивация и вдохновение',
      ], [
        'slug' => 'principle-1-ru',
        'page' => 'carrier',
        'text' => 'Мы осознали - чтобы сделать мир лучше,
        необходимо начать с себя!',
      ], [
        'slug' => 'principle-2-ru',
        'page' => 'carrier',
        'text' => 'Мы преображаемся каждый день!
        Мы стремимся быть лучше чем вчера!',
      ], [
        'slug' => 'principle-3-ru',
        'page' => 'carrier',
        'text' => 'Мы принимаем<br>конструктивную критику!',
      ], [
        'slug' => 'principle-4-ru',
        'page' => 'carrier',
        'text' => 'Мы за здоровый образ жизни!
        Здоровый образ жизни - наше кредо!',
      ], [
        'slug' => 'principle-5-ru',
        'page' => 'carrier',
        'text' => 'Нам достаточно один раз сказать - и мы
        доведем дело до логического завершения!',
      ], [
        'slug' => 'principle-6-ru',
        'page' => 'carrier',
        'text' => 'Для нас Большой успех - это сумма
        ежедневных маленьких побед!',
      ], [
        'slug' => 'principle-7-ru',
        'page' => 'carrier',
        'text' => 'Мы честны и открыты! Мы строим и поддерживаем
        доверительные и крепкие отношения!',
      ], [
        'slug' => 'principle-8-ru',
        'page' => 'carrier',
        'text' => 'Для нас завтра начинается сегодня,
        сейчас, в данный момент!',
      ], [
        'slug' => 'principle-9-ru',
        'page' => 'carrier',
        'text' => 'Мы важнее Я! Мы помогаем друг
        другу добиваться успеха!',
      ], [
        'slug' => 'principle-10-ru',
        'page' => 'carrier',
        'text' => 'Мы отдаем больше чтобы
        получать больше!',
      ], [
        'slug' => 'principle-11-ru',
        'page' => 'carrier',
        'text' => 'Мы дисциплинированны,
        самостоятельны и инициативны!',
      ], [
        'slug' => 'principle-12-ru',
        'page' => 'carrier',
        'text' => 'Мы оптимисты и мы верим в
        себя!',
      ], [
        'slug' => 'principle-13-ru',
        'page' => 'carrier',
        'text' => 'Мы трудолюбивы и динамичны!
        Мы увлечены тем, что делаем!',
      ], [
        'slug' => 'carrier-stage-1-ru',
        'page' => 'carrier.test',
        'text' => 'Стажировка и
        адаптация',
      ], [
        'slug' => 'carrier-stage-2-ru',
        'page' => 'carrier.test',
        'text' => 'Менеджер',
      ], [
        'slug' => 'carrier-stage-3-ru',
        'page' => 'carrier.test',
        'text' => 'Ведущий
        менеджер',
      ], [
        'slug' => 'carrier-stage-4-ru',
        'page' => 'carrier.test',
        'text' => 'Управляющий
        менеджер',
      ],
    ];

    foreach ($texts as $text) {
      Text::create([
        'locale' => 'ru',
        'slug' => $text['slug'],
        'page' => $text['page'],
        'text' => $text['text'],
      ]);

      Text::create([
        'locale' => 'en',
        'slug' => substr($text['slug'], 0, -2) . 'en',
        'page' => $text['page'],
        'text' => $text['text'],
      ]);
    }
  }
}
