<?php

namespace App\Http\Controllers\Buyer;

use App\Buyer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;

class BuyerController extends ApiController
{

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buyers = Buyer::has('transactions')->get();
        //ereturn response()->json(['data' => $buyers], 200);
        return $this->showAll($buyers);
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     */
    public function show(Buyer $buyer)
    {
       // $buyer = Buyer::has('transactions')->findOrFail($id);
        //return response()->json(['data' => $buyer], 200);
        return $this->showOne($buyer);
    }



}
