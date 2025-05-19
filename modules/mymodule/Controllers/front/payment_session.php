<?php
class MyModulePaymentSessionModuleFrontController extends ModuleFrontController {
    public function initContent(){
        parent::initContent();
        // receive data from gateway or external system
        // 'php://input' - PHP keyword-like stream wrapper 

        $json=Tools::file_get_contents('php://input'); // reads raw json data
        $data=json_decode($json, true); // converts json to php array

        //Process data 
        $response=[
            'id'=>uniqid('session_'),
            'status'=>'created',
            'amount'=>$data['amount'] ?? 0,
        ];

        // Return JSON response
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }
}
?>