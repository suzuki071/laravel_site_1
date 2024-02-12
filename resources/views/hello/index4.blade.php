<html>
  <head>
    <title>@yield('title')</title>
    <style>
      body {
        font-size: 16pt;
        color: #999;
        margin: 5px;
      }
      h1 {
        font-size: 50pt;
        text-align: right;
        color: #f6f6f6;
        margin: -20px 0px -30px 0px;
        letter-spacing: -4pt;
      }
      ul {
        font-size: 12pt;
      }
      hr {
        margin: 25px 100px;
        border-top: 1px dashed #ddd;
      }
      .menutitle {
        font-size: 14pt;
        font-weight: bold;
        margin: 0px;
      }
      .content {
        margin: 10px;
      }
      .footer {
        text-align: right;
        font-size: 10pt;
        margin: 10px;
        border-bottom: solid 1px #ccc;
        color: #ccc;
      }
    </style>
  </head>
  <body>
    @extends('layouts.hellopapp')

    @section('title', 'Index')

    @section('menubar')
      @parent
      インデックスページ
    @endsection

    @section('content')
      <p>ここが本文のコンテンツです</p>
      <p>ここに記述できます。www</p>

      @content('components.message')
        @slot('msg_title')
        CAUTION!
        @endslot

        @solt('msg_content')
        これはメッセージの表示です
        @endslot
      @endcontent
    @endsection

    @section('footer')
      copyright 2020 suzukid
    @endsection
  </body>
</html>