<?php

namespace App\Traits;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Exceptions\HttpResponseException;

trait RestApiResponseHandlerTrait
{


    /**
     * Handle Success Response
     */
    protected function sendSuccessPayloadResponse(string $recordType, array $recordPayload=[], int $statusCode=200){

        $httpCode = 0;
        $message = 'Success';
        $httpResponse = [
            'status' => true,
            'code' => 0,
            'message' => 'Success',
            'data' => $recordPayload ?? null,
            'errors' => null
        ];

        switch ($statusCode) {
            case 200:
                $httpCode = JsonResponse::HTTP_OK;
                $message = 'Success';
                break;
            case 201:
                $httpCode = JsonResponse::HTTP_CREATED;
                $message = 'New '.$recordType.'record created';
                break;
            case 204:
                $httpCode = JsonResponse::HTTP_CREATED;
                $message = $recordType.' record Updated';
            default:
                # code...
                break;
        }

        $httpResponse['message'] = $message;
        $httpResponse['code'] = $httpCode;
    }

    /**
     * Handle Success Response
     */
    protected function sendErrorPayloadResponse(Exception $exception){

    }

    /**
     * Handle Success Response
     */
    protected function sendExceptionPayloadResponse(Exception $exception){
        $httpResponse = [
            'status' => false,
            'code' => $httpCode,
            'message' => 'Enter valid inputs data',
            'data' => $data,
            'errors' => $validationErrors
        ];

        return response()->json($httpResponse, $httpCode);

    }
     /**
     * Handle json response for payload validation errors
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function sendFailedValidationResponse(array $validationErrors, $data = null,int $httpCode=JsonResponse::HTTP_UNPROCESSABLE_ENTITY)
    {
        $errorPayload = $this->getValidationErrorsPayload($validationErrors);
        $httpResponse = [
            'status' => false,
            'code' => $httpCode,
            'message' => 'Enter valid inputs data',
            'data' => $data,
            'errors' => $errorPayload
        ];

        return response()->json($httpResponse, $httpCode);
    }

    private function getValidationErrorsPayload($validationErrors)
    {
        $errorPayload = array_map('current', $validationErrors);
        return $errorPayload;
    }

    private function getExceptionPayload($exception){

    }

}
