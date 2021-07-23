<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SearchController extends Controller
{
    public function index(){
        return view("index");
    }

    // HTTPリクエストを送るURL
    private const REQUEST_URL = 'http://webservice.recruit.co.jp/hotpepper/gourmet/v1/';

    // APIキー
    private $api_key;

    public function hotpepperSearch(Request $request)
    {
        $keyword = $request["search"]["junre"];
        $range = $request["search"]["range"];
        $count = $request["search"]["count"];
        $sort = $request["search"]["sort"];

        // インスタンス生成
        $client = new Client();

        // HTTPリクエストメソッド
        $method = 'GET';

        // APIキーを取得
        $this->api_key = config('hotpepper.api_key');

        // APIキーや検索ワードなどの設定を記述
        $options = [
            'query' => [
                'key' => config('hotpepper.api_key'),
                'keyword' => $keyword,
                'range' => $range,
                'count' => $count,
                'sort' => $sort,
                'lat' => 36.5310338,
                'lng' => 136.6284361,
                'format' => 'json'
            ],
        ];

        // HTTPリクエストを送信
        $response = $client->request($method, self::REQUEST_URL, $options);
        // dd($response);
        // 'format' => 'json'としたのでJSON形式でデータが返ってくるので、連想配列型のオブジェクトに変換
        $shops = json_decode($response->getBody(), true)['results'];

        $res = [$keyword, $range, $sort, $count, $shops];
        // dd($res);
        // dd($res[4]["shop"]);
        // index.blade.phpを表示する
        return view('result')->with(["responses" => $res]);
    }
}
