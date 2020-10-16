<?php

namespace App\Http\Controllers;

use App\Bill;
use App\User;
use App\Food;
use Line\WebhookController;
use Illuminate\Http\Request;

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


        if (!$findBill || $findBill->status == 0) {
            $bill = Bill::create([
                'table_id' => $user->table_id
            ]);

            foreach ($forms as $form) {
                $bill->details()->create($form);
            }
        } else {
            foreach ($forms as $form) {
                $findBill->details()->create($form);
            }
        }

        $data = array(
            'to' => $uid,
            'messages' => [
                [
                    'type' => 'text',
                    'text' => 'ทำการสั่งอาหารสำเร็จ กรุณารออาหารสักครู่'
                ]
            ]
        );

        $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);


        $send_result = $this->send_push_message($post_body);

        return ['status' => 'success'];
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
}