<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Request as MyRequest;
use App\Service as MyService;
use App\Jobs\ProcessRequests;

class RequestController extends Controller
{
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
    public function store(Request $request)
    {
        //validate input
        $request->validate([
            'client_id' => 'required',
            'service_id' => 'required',
            'message_for_vendor' => 'nullable',
            // 'vendor_id' => 'required',
            // 'status' => 'required',
            // 'payment_method' => 'required',
            // 'payment_detail' => 'required',
            // 'payment_status' => 'required',
            // 'payment_id' => 'required',
            // 'service_history_id' => 'required',
        ]);

        $service_id = $request->get('service_id');
        $service = MyService::findOrFail($service_id)->with('vendor')->first();

        $request->request->add([
            'status' => 'pending',
            'vendor_id' => $service['vendor']['id'],
        ]);

        $request_id = ProcessRequests::dispatch($request->all())->delay(now()->addSeconds(15));

        //save request
        // $request_id = MyRequest::create($request->all())->id;

        //send response
        $responseArr = [
            'status' => true,
            // 'data' => ['request_id' => $request_id],
            'message' => 'Request added successfully',
        ];
        return response()->json($responseArr, 201);
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
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
