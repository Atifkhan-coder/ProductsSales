<x-app-layout>
    @extends('layout')

    <body class="font-sans antialiased min-h-screen bg-gray-100">
        <div class="container-fluid">
            <!-- Flash Session Start... -->
                <div class="container">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif
                </div>
            <!-- EndFlash Session... -->

            <!--Card Start... --->
                <div class="card shadow p-3 bg-white rounded">
                    <div class="card-header font-weight-bold bg-dark  text-white p-3">
                        <h1>EDIT PRODUCT</h2>
                    </div>
                    <!--Card Body Start... ---->
                        <div class="card">
                            <div class="card-body">
                            <form action="list" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <strong>Product Title:</strong>
                                        <input type="hidden" name="id" value="{{$data->id}}">
                                    <input type="text" class="form-control" placeholder="Enter Product Title" name="title"  value="{{$data->title}}">
                                        <span style="color:red">@error ('title'){{$message}} @enderror</span>
                                </div>

                                <div class="form-group">
                                    <strong>Product Description:</strong>
                                        <textarea class="form-control" name="description" placeholder="Product Description">{{ $data->description }}</textarea>
                                        <span style="color:red">@error ('title'){{$message}} @enderror</span>
                                </div>

                                <div class="form-group">
                                    <strong>Product Price:</strong>
                                    <input type="text" class="form-control" placeholder="Enter Product Price" name="price"  value="{{$data->price}}">
                                    <span style="color:red">@error ('price'){{$message}} @enderror</span>
                                </div>

                                <div class="form-group">
                                    <strong>Product Expiry Date:</strong>
                                    <input type="date" class="form-control" placeholder="Enter Product Exp Date" name="expdate"  value="{{$data->expdate}}">
                                        <span style="color:red">@error ('expdate'){{$message}} @enderror</span>
                                </div>

                                <strong>Thumbnail:</strong>
                                    <div>
                                        <input type="file" name="picture" class="form-control">
                                        <span style="color:red">@error ('picture'){{$message}} @enderror</span>
                                    </div>

                                <div class="form-group">
                                    <img src="{{ Storage::url($data->picture) }}" height="100" width="100" alt="" />
                                </div>

                                <button type="add" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"> Update</i></button>
                            </form>
                            </div>
                        </div>
                    <!--Card Body End... ---->
                </div>
            <!--Card End... --->
        </div><br>
    </body>

</x-app-layout>
