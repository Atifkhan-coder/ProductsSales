<x-app-layout>
    @extends('layout')

    <body class="font-sans antialiased min-h-screen bg-gray-100">
        <div class="container-fluid">

            <div class="card-header font-weight-bold bg-dark  text-white p-3">
                <h1>PRODUCTS LIST</h2>
            </div>
            <!-- Card div Start... --------------------->
                <div class="card shadow p-3 bg-white rounded">
                    <!-- Categories with DropDown Menu... -------------------------->
                        <div class="dropdown" style="float:right; margin-top:5px; margin-bottom:5px;margin-left: 10px;">
                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                PRODUCT CATEGORIES
                            </button>
                            <div class="dropdown-menu">
                                @foreach ($categories as $category)
                                    <a href="/category/{{ $category->id }}">
                                        <strong class="dropdown-item">{{ $category->name }}</strong>
                                    </a>
                                @endforeach
                            </div>
                            <!-- Add Product Button Start -------------------------------->
                                <a href="{{"AddProduct"}}">
                                    <button type="add" class="btn btn-primary" style="float:right; margin-top:5px; margin-bottom:5px;margin-right: 10px;">
                                        Add Product
                                    </button>
                                </a>
                            <!-- Add Product Button End ---------------------------------->
                        </div>
                    <!-- Categories with DropDown Menu... -------------------------->

                    <!-- Flash Session Start... --------------------------------->
                        <div class="container">
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{session('success')}}
                                </div>
                            @endif
                            @if(session('danger'))
                                <div class="alert alert-danger">
                                    {{session('danger')}}
                                </div>
                            @endif
                        </div>
                    <!-- EndFlash Session... ---------------------------------->

                    <!-- Table Start... --------------------------------------->
                        <div class="card">
                            <div style="overflow-x:auto;">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr class="bg-dark text-white">
                                            <td><strong>Thumbnail</strong></td>
                                            <td><strong>Title</strong></td>
                                            <td><strong>Description</strong></td>
                                            <td><strong>Price</strong></td>
                                            <td><strong>Expiry Date</strong></td>
                                            <td><strong>Action</strong></td>
                                        </tr>

                                        @foreach ($his as $store)
                                        <tr>
                                            <td><img src="{{ Storage::url($store->picture) }}" height="100" width="100" alt="" /></td>
                                            <td>{{$store['title']}}</td>
                                            <td>{{$store['description']}}</td>
                                            <td>{{$store['price']}}</td>
                                            <td>{{$store['expdate']}}</td>

                                            <td>
                                                <a href="/show/{{$store->id}}"><button class="btn btn-info" style="margin: 2px;"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                                <a href="/edit/{{$store->id}}"><button class="btn btn-primary" style="margin: 2px;"><i class="fa fa-edit"></i></button></a>
                                                <a href="/delete/{{$store->id}}"><button class="btn btn-danger" style="margin: 2px;"><i class="fa fa-trash"></i></button></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <!-- Table End... ---------------------------------------->
                </div>

                <div class="card-body">
                    <!-- Pagination Start... ---------------------->
                        {{$his->links()}}
                    <!-- Pagination End... ------------------------>
                </div>
            <!-- Card div End... ------------------------>
        </div>
    </body>
</x-app-layout>
