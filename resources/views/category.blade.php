<x-app-layout>
    @extends('layout')

    <body class="font-sans antialiased min-h-screen bg-gray-100">
        <div class="container-fluid">
            <!-- Card Start... ---------------->
                <div class="card shadow p-3 bg-white rounded">
                    <div class="card-header font-weight-bold bg-dark  text-white p-3">
                        <h1>ADD CATEGORY</h2>
                    </div>
                    <!-- Card Body Start... ------------->
                        <div class="card-body">
                            <div class="card-body">
                                <p style="color:red;"><strong>Note: First Create Category then Add Products.</strong></p>
                                <form action="/category/store" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <div class="form-group">
                                            <strong>Enter Category:</strong>
                                            <input type="text" class="form-control" placeholder="Enter category name" name="name">
                                                @error('name')
                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    <button type="add" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"> Add Category</i></button>
                                </form>
                            </div>
                        </div>
                    <!-- Card Body End... --------------->
                </div>
            <!-- Card End... ---------------->
        </div>
    </body>

</x-app-layout>
