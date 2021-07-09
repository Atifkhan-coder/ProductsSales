<x-app-layout>
    @extends('layout')

    <body class="font-sans antialiased min-h-screen bg-gray-100">
        <div class="container-fluid">
            <!--Card Start... --->
                <div class="card shadow p-3 bg-white rounded">
                    <div class="card">
                        <div class="card-header font-weight-bold bg-dark  text-white p-3">
                            <h1>ADD PRODUCT</h2>
                        </div><br>
                        <!-- Flash Session Start... -->
                            <div class="container">
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{session('success')}}
                                    </div>
                                @endif
                            </div>
                        <!-- EndFlash Session... -->

                        <!--Card Body Start... ---->
                            <div class="card-body">
                                <form action="AddProduct" method="POST" enctype="multipart/form-data">
                                    @csrf
                                            <div class="form-group">
                                                <strong>Product Title:</strong>
                                                <input type="text" class="form-control" placeholder="Enter Product Title" name="title">
                                                    @error('title')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                            </div>

                                                <div class="form-group">
                                                    <strong>Product Description:</strong>
                                                    <textarea class="form-control"  name="description" placeholder=" Enter Product Description"></textarea>
                                                        @error('description')
                                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                        @enderror
                                                </div>

                                            <div class="form-group">
                                                <strong>Product Price:</strong>
                                                <input type="text" class="form-control" placeholder="Enter Price in Pakistani Currency" name="price">
                                                    @error('price')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                            </div>

                                            <div class="form-group">
                                                <strong>Purchase Date:</strong>
                                                <input type="date" class="form-control" placeholder="Enter Product Exp Date" name="expdate">
                                                    @error('expdate')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                            </div>

                                            <div class="form-group">
                                                <strong>Select Category :</strong>
                                                <select name="category" id="category" class="form-control">
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                    @error('category')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                            </div>

                                            <div class="form-group">
                                                <strong>Thumbnail:</strong>
                                                <input type="file" name="picture" class="form-control" placeholder="Enter Image">
                                                    @error('picture')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                            </div>

                                    <button type="add" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"> Add Product</i></button>
                                </form>
                            </div>
                        <!--Card Body End... ---->
                    </div>
                </div>
            <!--Card End... --->
        </div><br>
    </body>

</x-app-layout>
