<?php

namespace App\Http\Controllers\Api;
use App\Models\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BrandStoreRequest;
use App\Traits\RestApiResponseHandlerTrait;

class BrandController extends Controller
{
    use RestApiResponseHandlerTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandStoreRequest $request)
    {
        try {
            $brandData = $request->validated();
            $brandRecord = Brand::create($brandData);

            return $this->sendSuccessPayloadResponse('Brand', $brandRecord, 201);
        } catch (\Exception $exception) {
            return $this->sendExceptionPayloadResponse($exception);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *\App\Http\Requests\
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
