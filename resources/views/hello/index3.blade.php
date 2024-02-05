<html>
  <head>
    <title>Hello/Index</title>
    <style>
      body {
        font-size: 16pt;
        color: #999;
      }
      h1 {
        font-size: 100pt;
        text-align: right;
        color: ##f6f6f6;
        margin: -50px 0px -100px 0px;
      }
    </style>
  </head>
  <body>
    <h1>Blade/Index</h1>
    <p>{{$msg}}</p>
    <p>{!! $escape !!}</p>
    <form method="post" action="/hello3">
      @csrf
      <input type="text" name="msg">
      <input type="submit">
    </form>

    <!-- ifディレクティブ -->
    @if ($value == 2)
     <p>おはようございます</p>
    @elseif ($value == 1)
     <p>こんにちは</p>
    @else
      <p>こんばんは</p>
    @endif

    <!-- unlessディレクティブ -->
    @unless ($value == 2)
      <p>2ではない</p>
    @endunless

    <!-- emptyディレクティブ -->
    @empty ($value)
      <p>valueは空ではないです</p>
    @endempty

    <!-- issetディレクティブ -->
    @isset($value)
      <p>valueはnullではないです</p>
    @endisset

    <!-- foreachディレクティブ -->
    @foreach($ary as $data_array)
      <p>$data_array</p>
    @endforeach

    <!-- break continue -->
    <p>break continue</p>
    @for ($i = 1; $i < 100; $i++)
      @if ($i % 2 == 1)
        @continue
      @elseif ($i <= 10)
        <p>No, {{$i}}</p>
      @else
        @break
      @endif
    @endfor

    <!-- ループ変数 -->
    <p>ループ変数</p>
    @foreach ($mouth as $mouth)
      @if ($loop->first)
        <p>データ一覧 要素数 : {{ $loop->count }}</p>
      @endif
      <p>NO,{{ $loop->iteration }}. {{ $mouth }}</p>
      @if ($loop->last)
        <p>--ここまで</p>
      @endif
    @endforeach

    <!-- phpディレクティブ -->
    @php
      $count = 0;
    @endphp

    <p>{{ $count }}</p>

  </body>
</html>