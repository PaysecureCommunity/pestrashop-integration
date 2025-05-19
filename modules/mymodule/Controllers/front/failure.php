<?php
class MyModuleFailureModuleFrontController extends ModuleFrontController {
    public function initContent(){
        parent::initContent();
        // error_Message:
        $this->context->smarty->assign([
            'error_message'=>'Your payment failed. Please try again.'
        ]);
        $this->setTemplate('modules:mymodule/views/templates/front/payment_failure.tpl');
    }
}
?>