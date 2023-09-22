<?php

namespace App\Helpers;

use Symfony\Component\HttpFoundation\Response;

class ErpResponse extends Response {

    public function __construct() {
        parent::__construct();
        $content = new \stdClass();
        $content->success = false;
        $this->headers->set('Content-Type', 'application/json');
        $this->setContent(json_encode($content));
    }

    public function setJsonContent($body, string $attribName = null) {
        $content = json_decode($this->getContent());
        if(is_null($attribName)){
            if(!is_string($body)) {
                foreach($body as $key=>$value) {
                    $content->{$key} = $value;
                }
            }
        }else{
            $content->{$attribName} = $body;
        }
        $this->setContent(json_encode($content));
    }

    public function setSuccess(bool $value) {
        $json_content = json_decode($this->getContent());
        $json_content->success = $value;
        $this->setContent(json_encode($json_content));
    }

    public function addError($error) {
        $json_content = json_decode($this->getContent());
        if(!isset($json_content->errors)){
            $json_content->errors = array();
        }
        $errorObject = new \stdClass();
        $errorObject->code = $error;
        $errorObject->message = ErrorHelper::getMessage($error);
        array_push($json_content->errors, $errorObject);
        $this->setContent(json_encode($json_content));
    }
}
