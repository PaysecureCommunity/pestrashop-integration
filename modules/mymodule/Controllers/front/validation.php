<?php
class MyModuleValidationModuleFrontController extends ModuleFrontController {

    // helper method: sendPaymentRequest
    private function sendPaymentRequest($data, $gateway) { 
        // determine API URL based on selected gateway
        switch ($gateway) {
            case 'razorpay':
                $url='https://api.razorpay.com/v1/orders';
                break;
                case 'cashfree':
                    $url='https://api.cashfree.com/pg/orders';
                    break;
                    case 'paytm':
                    $url='https://securegw.paytm.in/theia/api/v1/initiateTransaction';
                    break;
                    case 'phonepe':
                    $url='https://api.phonepe.com/apis/hermes/pg/v1/pay';
                    break;
                    case 'instamojo':
                    $url='https://api.instamojo.com/v2/payment_requests/';
                    break;
            default:
            return ['status' => 'error', 'message' => 'Incorrect payment gateway'];
        }
        //send POST request
        $ch= curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        $response=curl_exec($ch);
        if($response===false){
            // could log curl_error($ch) for debugging
             curl_close($ch);
             return ['status'=>'error', 'message'=>'cURL error'];       
        }
        curl_close($ch);
        $result=json_decode($response, true);
        if(!is_array($result)) {
            return ['status'=>'error', 'message'=>'Invalid JSON'];
        }
        return $result; 
    }
    public function postProcess(){
        // Here you can validate  cart, send to external payment, etc. 
        // postProcess() method- validation checkpoint that ensures all necessary cart info present before proceeding with payment process
        // $this->context->cart contains all cart-related info
        $cart=$this->context->cart; 

        // check if required cart information exits:
        if(!$cart->id_customer || 
           !$cart->id_address_delivery || 
           !$cart->id_address_invoice || 
           !$this->module->active){

            // Redirect to first step if validation fails
            Tools::redirect('index.php?controller=order&step=1');
        }

        // Build API request data
        $amount=(float)$cart->getOrderTotal(true, Cart::BOTH);
        $currency=$this->context->currency->iso_code;

        // Send payment request to an external API
        $gateway=Tools::getValue('gateway'); // from URL or form input
        $response=$this->sendPaymentRequest([
            'amount'=>$amount,
            'currency'=>$currency,
            'order_id'=>$cart->id,
            'customer_email'=>$this->context->customer->email,
        ], $gateway);  
        
        // simulate internal module endpoint links
        $sessionUrl=$this->context->link->getModuleLink('mymodule', 'payment_session');
        $authorizeUrl=$this->context->link->getModuleLink('mymodule', 'payment_authorize');

        // if api fails or times out, json_decode() could return null, so safeguard it by this condition: 
        if(!isset($response['status']) || $response['status'] !== 'success') {
            Tools::redirect($this->context->link->getModuleLink('mymodule', 'failure')); // redirect user to custom payment failure page
            return;
        }
        
        // set the order status
        $orderStatus=Configuration::get('PS_OS_PAYMENT');

        // validate and create the order
        $this->module->validateOrder(
            (int)$cart->id,
            $orderStatus,
            $amount,
            $this->module->displayName,
            null,
            [],
            (int)$this->context->currency->id,
            false,
            $this->context->customer->secure_key 
        );

        // Redirect to confirmation page
        Tools::redirect('index.php?controller=order-confirmation&id_cart=' . (int)$cart->id . 
        '&id_module=' . (int)$this->module->id .
        '&id_order=' . (int)$this->module->currentOrder .
        '&key=' . $this->context->customer->secure_key);
    }
}
    
?>
        