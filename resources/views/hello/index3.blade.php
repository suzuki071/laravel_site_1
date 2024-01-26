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

    @if ($value == 2)
     <p>おはようございます</p>
    @elseif ($value == 1)
     <p>こんにちは</p>
    @else
      <p>こんばんは</p>
    @endif
  </body>
</html>