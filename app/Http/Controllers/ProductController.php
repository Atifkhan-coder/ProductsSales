<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
// Category....
    public function add()
    {
        $categories = Category::all();
        return view('AddProduct',compact('categories'));
    }
// Product...
     public function addproduct(Request $req)
     {
/* validation... ---------------------------------------------------------*/
    $this->validate($req,[
            'title' => 'required|alpha||min:3|max:25',
            'description' => 'required|min:3|max:100',
            'price' => 'required|numeric|min:3|max:99999999',
            'expdate' => 'required|date',
            'category' => 'required',
            'picture' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $path = $req->file('picture')->store('public/images');
// Connect With DataBase...

        $addproduct = new Product;
        $addproduct->title=$req->title;
        $addproduct->description=$req->description;
        $addproduct->price=$req->price;
        $addproduct->expdate=$req->expdate;
        $addproduct->picture=$req->picture;
        $addproduct->category_id=$req->category;
        $addproduct->picture = $path;
        $addproduct->business_id = auth()->user()->id;
        $addproduct->save();
            return redirect('list')->with('success','Product Added Successfully');
     }

// Show Product...
    public function show()
    {
        // $store = Product::all();
        $store = Product::orderBy('id','desc','asc')->paginate(5);
        $categories = Category::all();
        return view ('list',compact('categories'))->with('his',$store);
    }

/* Show Home Page... -----------------------------------------------------------*/
    public function showbuy()
    {
        $store = Product::all();
        // $store = Product::paginate(5);
        return view ('home')->with('his',$store);
    }
/* Show Detail Page... -----------------------------------------------------------*/
    public function detail($id)
    {
        // return Product::find($id);
        $store = Product::find($id);
        return view('detail',['his'=>$store]);
    }
/* Show search Page... -----------------------------------------------------------*/
    public function search(Request $req)
    {
        // return $req->input();
       $store = Product::where('title', 'like', '%'.$req->input('query').'%')->get();
       return view('search',['his'=>$store]);
    }

/* Delete Operation... -----------------------------------------------------*/
    public function delete($id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect('list')->with('danger','Record has been deleted successfully');
    }

/* Edit Data... ------------------------------------------------------------*/
    public function edit($id)
    {
        $data = Product::find($id);
        return view('edit',['data'=>$data]);
    }

/* Update the specified resource in storage.---------------------------------*/
    public function update(Request $req)
    {
    $addproduct = Product::find($req->id);
        if($req->hasFile('picture')){
            $this->validate($req,[
              'picture' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
        $path = $req->file('picture')->store('public/images');
        $addproduct->picture = $path;
        }
    $addproduct->title=$req->title;
    $addproduct->description=$req->description;
    $addproduct->price=$req->price;
    $addproduct->expdate=$req->expdate;
    $addproduct->business_id = auth()->user()->id;
    $addproduct->save();
        return redirect('list')->with('success','Record Updated Successfully');
    }

/* ------------------------------------------------------------------------------------------------------*/
//About Us....
    public function aboutus()
    {
        return view('aboutus');
    }
//Service Page....
    public function Services()
    {
        return view('services');
    }
/* ------------------------------------------------------------------------------------------------------*/
//Show Data Sale Record...
    public function salerecord()
    {
        $item = Cart::all();
        $sum = DB::table('carts')->get()->sum('total');
            return view ('salerecord')->with('item',$item)->with('sum',$sum );
    }
//Show Cart Page....
    public function cart($id)
    {
        $product = Product::find($id);
        return view('cart',compact('product'));
    }
/* Show view Page... -----------------------------------------------------------*/
    public function showone($id)
    {
// return Product::find($id);
        $store = Product::find($id);
        return view('view',['his'=>$store]);
}

}
