<?php

namespace App\Http\Controllers;

use App\Bill;
use App\User;
use App\Food;
use Line\WebhookController;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class BillController extends Controller
{
    public function addBill(Request $request)
    {

        $uid = $request->line_user_id;
        $user =  User::where('line_user_id', $uid)->first();

        $findBill = Bill::where('table_id', $user->table_id)->latest()->first();

        $forms = [];


        foreach ($request->carts as $cart) {
            $food = Food::find($cart['id']);
            array_push($forms, [
                'food_id' => $food->id,
                'user_id' => $user->id,
                'price' => $food->real_price,
                'price_sum' => $food->real_price * $cart['amount'],
                'amount' => $cart['amount']
            ]);
        }

        $bill_id = '';

        if (!$findBill || $findBill->status == 0) {
            $bill = Bill::create([
                'table_id' => $user->table_id
            ]);

            $bill_id = $bill->id;

            foreach ($forms as $form) {
                $bill->details()->create($form);
            }
        } else {
            $bill_id = $findBill->id;
            foreach ($forms as $form) {
                $findBill->details()->create($form);
            }
        }

        $data = array(
            'to' => $uid,
            'messages' => [
                [
                    'type' => 'text',
                    'text' => "ทำการสั่งอาหารสำเร็จ กรุณารออาหารสักครู่ | เลขบิล#{$bill_id}"
                ]
            ]
        );

        $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);


        $send_result = $this->send_push_message($post_body);

        return ['status' => 'success'];
    }

    public function closeBill(Request $request)
    {
        $bill = Bill::find($request->bill_id);
        $bill->update([
            'status' => 0
        ]);
        $users = User::where('table_id', $bill->table_id)->get();

        $userRemoveTable = User::where('table_id', $bill->table_id)->update([
            'table_id' => null
        ]);

        $bill->table->restaurant;
        $to =  Arr::pluck($users, 'line_user_id');
        $billList = [];
        $amount = 0;
        $price = 0;
        foreach ($bill->details as $detail) {
            $amount += $detail->amount;
            $price  += $detail->price_sum;

            array_push($billList,  [
                "type" => "box",
                "layout" => "horizontal",
                "contents" => [
                    [
                        "type" => "text",
                        "text" => $detail->food->name . ' x ' .  $detail->amount,
                        "size" => "sm",
                        "color" => "#555555",
                        "flex" => 0
                    ],
                    [
                        "type" => "text",
                        "text" => $detail->price_sum . ' บาท',
                        "size" => "sm",
                        "color" => "#111111",
                        "align" => "end"
                    ]
                ]
            ]);
        }

        array_push(
            $billList,
            [
                "type" => "separator",
                "margin" => "xxl"
            ],
            [
                "type" => "box",
                "layout" => "horizontal",
                "margin" => "xxl",
                "contents" => [
                    [
                        "type" => "text",
                        "text" => "รายการอาหาร",
                        "size" => "sm",
                        "color" => "#555555"
                    ],
                    [
                        "type" => "text",
                        "text" => "{$amount}",
                        "size" => "sm",
                        "color" => "#111111",
                        "align" => "end"
                    ]
                ]
            ],
            [
                "type" => "box",
                "layout" => "horizontal",
                "contents" => [
                    [
                        "type" => "text",
                        "text" => "ราคารวม",
                        "size" => "sm",
                        "color" => "#555555"
                    ],
                    [
                        "type" => "text",
                        "text" => "{$price} บาท",
                        "size" => "sm",
                        "color" => "#111111",
                        "align" => "end"
                    ]
                ]
            ]
        );
        $data = array(
            'to' => $to,
            'messages' =>
            array(
                0 => array(
                    'type' => 'text',
                    "text" => 'ขอขอบคุณที่ใช้บริการ'
                ),
                1 =>
                array(
                    'type' => 'flex',
                    'altText' => 'สรุปบิล',
                    'contents' =>
                    array(
                        'type' => 'carousel',
                        'contents' => [
                            [
                                "type" => "bubble",
                                "body" => [
                                    "type" => "box",
                                    "layout" => "vertical",
                                    "contents" => [
                                        [
                                            "type" => "text",
                                            "text" => "ตามสั่ง",
                                            "weight" => "bold",
                                            "color" => "#f26222",
                                            "size" => "sm"
                                        ],
                                        [
                                            "type" => "text",
                                            "text" => $bill->table->restaurant->name,
                                            "weight" => "bold",
                                            "size" => "xxl",
                                            "margin" => "md"
                                        ],
                                        [
                                            "type" => "text",
                                            "text" => $bill->table->restaurant->description,
                                            "size" => "xs",
                                            "color" => "#aaaaaa",
                                            "wrap" => true
                                        ],
                                        [
                                            "type" => "separator",
                                            "margin" => "xxl"
                                        ],
                                        [
                                            "type" => "box",
                                            "layout" => "vertical",
                                            "margin" => "xxl",
                                            "spacing" => "sm",
                                            "contents" => $billList
                                        ],
                                        [
                                            "type" => "separator",
                                            "margin" => "xxl"
                                        ],
                                        [
                                            "type" => "box",
                                            "layout" => "horizontal",
                                            "margin" => "md",
                                            "contents" => [
                                                [
                                                    "type" => "text",
                                                    "text" => "เลขบิล",
                                                    "size" => "xs",
                                                    "color" => "#aaaaaa",
                                                    "flex" => 0
                                                ],
                                                [
                                                    "type" => "text",
                                                    "text" => "#{$bill->id}",
                                                    "color" => "#aaaaaa",
                                                    "size" => "xs",
                                                    "align" => "end"
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                "styles" => [
                                    "footer" => [
                                        "separator" => true
                                    ]
                                ]
                            ]
                        ]
                    ),
                ),
            ),
        );


        $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);


        $send_result = $this->send_push_multiMessage($post_body);


        return ['message' => 'success'];
    }

    public function send_push_message($post_body)
    {

        $url = 'https://api.line.me/v2/bot/message/push';
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


    public function send_push_multiMessage($post_body)
    {

        $url = 'https://api.line.me/v2/bot/message/multicast';
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
}