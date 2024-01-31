<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    /**
     * ルートパラメータ
     */
    public function index($id='zero') {
        $date = [
            'msg' => 'これはコントローラから渡されたメッセージです。',
            'id' => $id
        ];
        return view('hello.index', $date);
    }

    /**
     * クエリパラメータ
     */
    public function index2(Request $request) {
        $date = [
            'msg' => 'これはコントローラから渡されたメッセージです。',
            'id' => $request->id
        ];
        return view('hello.index2', $date);
    }

    /**
     * bladeテンプレート
     */
    public function index3() {
        $data_ary = ['いちご', 'ぶどう', 'みかん', 'りんご', 'メロン'];

        $date = [
            'msg' => '名前を入力してください',
            'escape' => '<a href="/user">エスケープ処理あり</a>',
            'value' => 1,
            'ary' => $data_ary,
        ];
        return view('hello.index3', $date);
    }

    public function post3(Request $request) {
        $msg = $request->msg;
        $date = [
            'msg' => 'こんにちは、' . $msg . 'さん！',
        ];
        return view('hello.index3', $date);
    }

    public function test(Request $request, Response $response) {
        $html = <<<EOF
<html>
<head>
<title>Hello/Index</title>
<style>
body {
    font-size:16px;
    color:#999;
}
h1 {
    font-size:120px;
    text-align:right;
    color:#fafafa;
    margin:-50px 0px -120px 0px;
}
</style>
</head>
<body>
    <h1>Hello</h1>
    <h3>Request</h3>
    <pre>{$request}</pre>
    <h3>Response</h3>
    <pre>{$response}</pre>
</body>
</html>
EOF;
        $response->setContent($html);
        return $response;
    }
}
