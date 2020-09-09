<?php

namespace App\Http\Controllers\Line;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;


class WebhookController extends Controller
{



    public function index(Request $request)
    {

        $REPLY_MSG_NEED_AUTH = ['PAYMENT' => 'ชำระค่าไฟ'];

        if ($request['events']) {
            if (sizeof($request['events']) > 0) {
                foreach ($request['events'] as $event) {
                    $reply_token = $event['replyToken'];
                    $text = $event['message']['text'];
                    $userID = $event['source']['userId'];
                    // checkUser Register
                    $checkRegister = $this->checkRegister($userID);

                    if ($checkRegister != true) {
                        $this->sendRegisterImage($reply_token);
                        return false;
                    }


                    // LOGIC FROM REPLY MESSAGE //

                    $this->sendText($reply_token, $text);


                    // END LOGIC FROM REPLY MESSAGE //


                }
            }
        }


        return 'ok';


        // Failed

    }

    function sendRegisterImage($reply_token)
    {
        $m = [
            [
                "type" => "flex",
                "altText" => "กรุณาทำการลงทะเบียนก่อนใช้งานฟังชันดังกล่าว",
                "contents" => array(
                    'type' => 'carousel',
                    'contents' => [array(
                        'type' => 'bubble',
                        'hero' =>
                        array(
                            'type' => 'image',
                            'url' => url('images/registerBanner.jpg'),
                            'size' => 'full',
                            'aspectRatio' => '30:26',
                            'aspectMode' => 'cover',
                            'action' =>
                            array(
                                'type' => 'uri',
                                'uri' => 'https://liff.line.me/1654463041-BP37a3GE',
                            ),
                        ),
                    )]

                )
            ],
        ];
        $data = [
            'replyToken' => $reply_token,
            'messages' =>  $m
        ];

        $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);

        $send_result = $this->send_reply_message($post_body);
    }

    function sendText($reply_token, $text)
    {
        $m = [
            [
                "type" => "text",
                "text" => $text
            ],
        ];
        $data = [
            'replyToken' => $reply_token,
            'messages' =>  $m
        ];

        $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);

        $send_result = $this->send_reply_message($post_body);
    }
    function showPaymentList($reply_token, $user_id)
    {

        $generateCard = $this->generateCard(
            url('images/payment.png'),
            'ชำระค่าบริการ',
            [
                ['title' => 'บ้านทดสอบที่ 1', 'description' => 'ยอดชำระ 1 เดือน', 'url' => 'https://liff.line.me/1654251675-OmqGK9r1'],
                ['title' => 'บ้านทดสอบที่ 2', 'description' => 'ยอดชำระ 2 เดือน', 'url' => 'https://liff.line.me/1654251675-OmqGK9r1']
            ]
        );

        $m = [
            [
                "type" => "flex",
                "altText" => "กรุณาเลือกรายการบ้านเพื่อทำการเข้าสู่หน้ารายละเอียดการชำระเงิน",
                "contents" => array(
                    'type' => 'carousel',
                    'contents' => $generateCard

                )
            ],
        ];

        $data = [
            'replyToken' => $reply_token,
            'messages' =>  $m
        ];

        $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);

        $send_result = $this->send_reply_message($post_body);
    }

    // public function message(Request $request)
    // {
    //     $msg = $request->message;

    //     $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('u9wuUKvatKlXDAOB0+fUhD3Js3HRJlAbbdnDPQMa4HC3HChIo4iCFgWtIqCpf41gXQAeBJUCAQSdbH6eoy/qWo2L9XUOQrUHF3reHqtbP/g4NcYdAMf3B9cE6WCuIbd3+WYP268npsG4hZrCxqrBSQdB04t89/1O/w1cDnyilFU=');
    //     $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => 'ba775ba81e8d1d728e570df621180632']);

    //     $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($msg);

    //     $response = $bot->pushMessage('Ua3031c5497b51842b4441eea8debe72a', $textMessageBuilder);
    //     if ($response->isSucceeded()) {
    //         return  'Succeeded!';
    //     }

    //     // Failed
    //     return $response->getHTTPStatus() . ' ' . $response->getRawBody();
    // }



    function checkRegister($userId)
    {
        $find = User::where('line_user_id', $userId)->first();

        $isRegistered = $find ? true : false;

        return $isRegistered;
    }
    function send_reply_message($post_body)

    {

        $url = 'https://api.line.me/v2/bot/message/reply';
        $accssToken = '1RJVFAn7A09mJIUAj3sfgxTvzic1p51CXhP9Mwx8j1xRdjSWUwXTMmkq7TNgLIrcdMHPbjFcFCpDxeU3JQ40o8Vp9EEisJmZEOiK4m0sMBNczICWYZLOHGBG5F+xfYX+uFVrn1CPqjXfxXg8HzLdSgdB04t89/1O/w1cDnyilFU='; // Access Token ค่าที่เราสร้างขึ้น
        $post_header = array('Content-Type: application/json', 'Authorization: Bearer ' . $accssToken);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $post_header);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_body);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }

    function generateCard($image, $footer, $datas)
    {

        $cards = [];

        foreach ($datas as $data) {

            $set = array(
                'type' => 'bubble',
                'hero' =>
                array(
                    'type' => 'image',
                    'url' => $image,
                    'size' => 'full',
                    'aspectRatio' => '20:13',
                    'aspectMode' => 'cover',
                ),
                'body' =>
                array(
                    'type' => 'box',
                    'layout' => 'vertical',
                    'contents' =>
                    array(
                        0 =>
                        array(
                            'type' => 'text',
                            'text' => $data['title'],
                            'weight' => 'bold',
                            'size' => 'xl',
                        ),
                        1 =>
                        array(
                            'type' => 'text',
                            'text' => $data['description'],
                            'style' => 'normal',
                            'decoration' => 'underline',
                        ),
                    ),
                ),
                'footer' =>
                array(
                    'type' => 'box',
                    'layout' => 'vertical',
                    'spacing' => 'sm',
                    'contents' =>
                    array(
                        0 =>
                        array(
                            'type' => 'button',
                            'style' => 'link',
                            'height' => 'sm',
                            'color' => '#f37022',
                            'action' =>
                            array(
                                'type' => 'uri',
                                'label' => $footer,
                                'uri' => $data['url'],
                            ),
                        ),
                        1 =>
                        array(
                            'type' => 'spacer',
                            'size' => 'sm',
                        ),
                    ),
                    'flex' => 0,
                ),
            );

            array_push($cards, $set);
        }

        return $cards;
    }
}