<?php

namespace App\Http\Controllers\API;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Models\products;
use App\Http\Controllers\Controller as controller; 

class BaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($result ,$message)
    {
        $response=[

            'success'=>true,
            'Data'=>$result,
            'message'=>$message,
        ];
        return response()->json($response,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($error,$errorMessage=[],$code=404)
    {
        $response=[

            'success'=>false,
            'message'=>$error,
        ];
       if(!empty($errorMessage)){
        $response['data']=$errorMessage;
       }
       return response()->json($response,$code);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
