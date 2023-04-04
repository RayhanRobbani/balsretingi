<?php

namespace App\Http\Controllers\Gateway\uddoktapay;

use App\Lib\UPAPI;
use App\Models\Deposit;
use App\Models\GeneralSetting;
use App\Http\Controllers\Gateway\PaymentController;
use App\Http\Controllers\Controller;

class ProcessController extends Controller
{

    /*
     * UddoktaPay Gateway
     */
    public static function process($deposit)
    {
        UPAPI::init('18b2ca74b5fe2f63d8293687d94fde987925c98f', 'https://pay.usdt-gt.com/api/checkout-v2');
        
        $data = [
            'amount' => round($deposit->final_amo,2),
            'full_name' => auth()->user()->username,
            'email' => auth()->user()->email,
            'metadata' => [
                'trx' => $deposit->trx
            ],
            'redirect_url' => route('ipn.'.$deposit->gateway->alias),
            'cancel_url' => route('user.deposit'),
            'webhook_url' => route('ipn.'.$deposit->gateway->alias.'.webhook'),
        ];
        
        $response = UPAPI::create_payment($data);
        
        if(!isset($response)){
            die("Something weng wrong");
        }
        
        if(isset($response['status']) && !$response['status']){
            die($response['message']);
        }
        
        header("Location:" . $response['payment_url']);
        exit();
        //redirect($response['payment_url']);
    }
    public function ipn()
    {
        UPAPI::init('18b2ca74b5fe2f63d8293687d94fde987925c98f', 'https://pay.usdt-gt.com/api/checkout-v2');
        $data = UPAPI::execute_payment_v2();
        if ($data['status'] == "COMPLETED") {
            $track = $data['metadata']['trx'];
            //GRAB DATA FROM DATABASE!!
            $data = Deposit::where('trx', $track)->where('status',0)->orderBy('id', 'DESC')->first();
            if ($data->status == '0') {
                PaymentController::userDataUpdate($data->trx);
                $notify[] = ['success', 'Your deposit is success.'];
                return redirect()->route('user.deposit')->withNotify($notify);
            }
        }
    }
    
    public function webhook()
    {
        die('Invalid Request.');
    }
}
