<x-app-layout>
    @extends('layout')

    <body class="font-sans antialiased min-h-screen bg-gray-100">
        <div class="container-fluid ">
            <!-- Flash Session Start... ---------------->
                <div class="container">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif
                </div>
            <!-- EndFlash Session... ------------------->

            <!-- Start Card... ------------------------->
                <div class="card shadow p-3 bg-white rounded" >
                    <div class="card">
                        <div class="card-header font-weight-bold bg-dark  text-white p-3">
                            <h1>CREATE BUSINESS</h2>
                        </div>

                        <!-- Start Card Body... -->
                            <div class="card-body">
                                <form action="CreateBusiness" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <strong>Bussiness Title:</strong>
                                        <input type="text" class="form-control" placeholder="Enter Account Title" name="title".required>
                                            @error('title')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                    </div>

                                    <div class="form-group">
                                        <strong>Business Type:</strong>
                                        <input type="text" class="form-control" placeholder="Enter Account Type" name="type".required>
                                            @error('type')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                    </div>

                                    <div class="form-group">
                                        <strong>Account Number:</strong>
                                        <input type="text" class="form-control" placeholder="Enter Account Number" name="accountnumber".required>
                                            @error('accountnumber')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                    </div>

                                    <button type="create" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"> Create</i></button>
                                </form>
                            </div>
                        <!-- End Card Body... -->

                    </div>
                </div>
            <!-- End Card... ------------------------->
        </div>
    </body>

</x-app-layout>
