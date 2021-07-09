<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
class CartController extends Controller
{
//Store Cart Date...
    public function cartBuy(Request $request,$id)
    {
        $this->validate($request,[
            'Qty' => 'required',
        ]);
        $product = Product::find($id);
        $total = $request->Qty * $product->price;
        $data = new Cart;
        $data->title = $product->title;
        $data->price = $product->price;
        $data->description = $product->description;
        $data->expdate = $product->expdate;
        $data->image = $product->picture;
        $data->Qty = $request->Qty;
        $data->total = $total;
        $data->save();
            return redirect('/home')->with('success','Your product successfully added in the cart');
    }
//Dete Sale Record...
    public function deleteSale($id)
    {
        $record = Cart::where('id',$id);
        $record->delete();
            return redirect('/salerecord')->with('danger','Record deleted successfully');

    //    alert()->success('Your Product Record deleted successfully','Congratulations!')->persistent('close');
    //    return back();
    }

}
