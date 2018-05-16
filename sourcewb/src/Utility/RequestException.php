<?php

use Cake\Controller\Exception;

class RequestException extends Exception
{
    protected $exceptionData = null;

    public function __construct($message = '', $code = 500, Exception $previous = null, $exceptionData = null)
    {
        $this->exceptionData = $exceptionData;
        if (!is_string($message)) {
            $this->exceptionData = $message;
            $message = '';
        }
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return mixed
     */
    public function getExceptionData()
    {
        return $this->exceptionData;
    }
}
