<?php
namespace api\modules\v1\component;
use Yii;
use yii\base\NotSupportedException;
use \yii\web\IdentityInterface;

/**
 * THis component is used for return the response for any API
 * 
 */
class StripeFunctions 
{
    public function GetCustomer($email,$token){
        $customer = \Stripe\Customer::create(array(
                    'email' => $email,
                    'source'  => $token
            ));
        return $customer;
    }
    
    public function GetSubscription($customer,$plan){
        $subscription = \Stripe\Subscription::create(array(
                "customer" => $customer,
                "plan" => $plan
            ));
        return $subscription;
    }
}
