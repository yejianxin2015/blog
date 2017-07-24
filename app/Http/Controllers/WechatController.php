<?php

namespace App\Http\Controllers;
use EasyWeChat\Foundation\Application;
use Illuminate\Http\Request;

class WechatController extends Controller
{

    public function serve()
    {
        $options = [
            'debug'  => true,
            'app_id' => 'wx603412d89fcc096f',
            'secret' => '7e1a5c874f9433b3b1add933b963061e',
            'token'  => 'easywechat',
            // 'aes_key' => null, // 可选
            'log' => [
                'level' => 'debug',
                'file'  => '/tmp/easywechat.log', // XXX: 绝对路径！！！！
            ],
        ];
        $app = new Application($options);
        $response = $app->server->serve();
        // 将响应输出
        return $response;
    }
}
