@extends('FrontEndLayout')
@section('content')

        <!--Srart Card... ------------------------->
            <div class="card">
                <div class="card-header font-weight-bold bg-dark  text-white">
                        <h4>PRODUCT CART</h4>
                </div>

                    <div class="card-body">
                        <form action="/buy/product/{{$product->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    {{-- <strong>Prodct Thumbnail:</strong> --}}
                                    <img src="{{ Storage::url($product->picture) }}" style="height: 220px;" />
                                </div>
                                <div class="form-group">
                                    <strong>Product Title:</strong>
                                    <label for="" class="form-control">{{$product->title}}</label>
                                </div>

                                <div class="form-group">
                                    <strong>Product Price:</strong>
                                    <label for="" class="form-control">{{$product->price}}</label>
                                </div>

                                <div class="form-group">
                                    <strong>Product Description:</strong>
                                    <label for="" class="form-control">{{$product->description}}</label>
                                </div>

                                <div class="form-group">
                                    <strong>Product Expiry Date:</strong>
                                    <label for="" class="form-control">{{$product->expdate}}</label>

                                <div class="form-group">
                                    <strong>Product Quantity:</strong>
                                        <input type="varchar" class="form-control" placeholder="Enter Product Quantity" name="Qty">
                                            @error('Qty')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                </div>

                            <button type="add" class="btn btn-primary"><i class="fa fa-cart-plus"> Buy Now </i></button>
                        </form>
                    </div>
            </div>
        <!--End Card... ------------------------->

@endsection
