<?php

namespace App\Http\Controllers;

use App\Models\productInvoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = productInvoice::orderBy('id','DESC')->get();
        return  view('invoiceDetails',['products' =>$products] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        // var_dump($request->all());die;

        $validator = Validator::make($request->all(),[
            'name' => 'required|max:50',
            // 'qty'  => 'required',
            // 'price' => 'required',


        ]);

        $fail = $validator->fails();
        if($fail){
            //save data here
echo "hello";die;
return redirect('/')->withErrors($validator);

        }else{
            $product = new productInvoice();
            $product->ItemName = $request->name;
            $product->ItemPrice = $request->rate;
            $product->ItemQty   = $request->qty;
            $product->save();
            $request->session()->Flash('success', 'product has been made successfully');
            return redirect('/');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productInvoice  $productInvoice
     * @return \Illuminate\Http\Response
     */
    public function show(productInvoice $productInvoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productInvoice  $productInvoice
     * @return \Illuminate\Http\Response
     */
    public function edit(productInvoice $productInvoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\productInvoice  $productInvoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productInvoice $productInvoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productInvoice  $productInvoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(productInvoice $productInvoice)
    {
        //
    }
}
