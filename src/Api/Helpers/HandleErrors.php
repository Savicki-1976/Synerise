<?php

namespace Savicki\Synerise\Api\Helpers;

class HandleErrors
{

    public static function message(\GuzzleHttp\Exception\RequestException $e): string
    {
        $errorMessage = $e->getMessage();
        $errorCode = $e->getCode();
        $errorJson = null;
    
        if ($e->hasResponse()) {

            $errorJson = $e->getResponse()->getBody()->getContents();
            $error = json_decode($errorJson);

            if (isset($error->message)) {
                $errorMessage = $error->message;
            }

            if (isset($error->errorCode)) {
                $errorCode = $error->errorCode;
            }

        }

       return $errorCode . ': ' . $errorMessage;
    }
}
