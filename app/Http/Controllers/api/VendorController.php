<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vendor;
use App\Request as MyRequest;

class VendorController extends Controller
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
     * Display my requests.
     *
     * @return \Illuminate\Http\Response
     */
    public function requests(Request $request)
    {
        $request->validate([
            'vendor_id' => 'required',
        ]);

        $vendor_id = $request->get('vendor_id');

        $requests = Vendor::where(['id'=>$vendor_id])->with('requests')->orderBy('created_at', 'DESC')->get();
        // $requests = MyRequest::where(['vendor_id'=>$vendor_id])->with('requests')->get();
        //send response
        $responseArr = [
            'status' => true,
            'data' => $requests,
            'message' => !empty($requests)? 'Data found successfully' : 'Data not found',
        ];
        return response()->json($responseArr, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
