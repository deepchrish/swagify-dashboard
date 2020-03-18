<?php

namespace App\Traits;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

trait RestApiExceptionHandlerTrait
{

     /**
     * Handle json response for known throwable errors
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function handleThrowableApiException(Exception $exception)
    {
        if($exception instanceof \Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException){
            return $this->sendJsonResponse($exception, 'Method Not Allowed');
        }
        if($exception instanceof \Illuminate\Database\Eloquent\ModelNotFoundException){
            return $this->sendJsonResponse($exception, 'Model Not Found');
        }
        return $this->sendJsonResponse($exception,'Unknown Error', JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
       
    }

    private function sendJsonResponse(Exception $exception, string $errorType, int $CODE = JsonResponse::HTTP_NOT_FOUND){
        $message = 'Server Error';
        $httpCode = $CODE;
        $httpResponse=[];
        $trace = null;

        switch($CODE){
            case 404: 
                $message = 'Not Found';
                break;
            default:
        }

        //Set trace
        $trace =  [
            'error' => $errorType,
            'message' => $exception->getMessage(),
            'file' => $exception->getFile(),
            'line' => $exception->getLine()
        ];

        $httpResponse = [
            'status' => false,
            'message' => $message,
            'type' => $errorType,
            'code' => $httpCode,
            'data' => null,
            'trace' => $trace
        ];

        return response()->json( $httpResponse, $httpCode);
    }


}