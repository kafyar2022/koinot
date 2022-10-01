<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Email from Koinoti Nav</title>
</head>

<body>
  <h3>Рузультаты тестов: <span style="font-size: 24px; {{ $details['result'] >= 90 ? 'color: lightgreen;' : ($details['result'] < 90 && $details['result'] > 70 ? 'color: orange;' : 'color: red;') }}">{{ $details['result'] }}</span></h3>

  <p>Имя: {{ $details['name'] }}</p>
  <p>E-mail: {{ $details['email'] }}</p>
  <p>Тел: {{ $details['tel'] }}</p>
  <p>Сообщение: {{ $details['message'] }}</p>

  @foreach ($details['stages'] as $stage)
    <p><b>{{ $stage->title }}</b></p>

    @foreach ($stage->questions as $question)
      <p>{{ $question->question }}</p>
      <ul>
        @foreach ($question->choices as $choice)
          @if ($question->answer == $question->userAnswer)
            <li @if ($choice == $question->answer) style="color: lightgreen" @endif>{{ $choice }}</li>
          @endif
          @if ($question->answer !== $question->userAnswer)
            <li
              @if ($choice == $question->answer) style="color: lightgreen" @endif
              @if ($choice == $question->userAnswer) style="color: red" @endif>{{ $choice }}</li>
          @endif
        @endforeach
      </ul>
    @endforeach
  @endforeach
</body>

</html>
