import { RussianTest } from './russian-test.js';
import { EnglishTest } from './english-test.js';
import { FinanceTest } from './finance-test.js';

export const Stages = [
  {
    title: 'Русский язык',
    questions: RussianTest,
  },
  {
    title: 'Английский язык',
    questions: EnglishTest,
  },
  {
    title: 'Финансовый блок',
    questions: FinanceTest,
  },
];
