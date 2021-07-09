<x-app-layout>
    @extends('layout')

    <body class="font-sans antialiased min-h-screen bg-gray-100">
        <div class="min-h-screen bg-gray-100">

            <div class="container-fluid">
                <div class="card-header font-weight-bold bg-dark  text-white p-3">
                    <h1>CATEGORIEY: {{ $category->name }}</h1>
                </div>
                <div class="card shadow p-3 bg-white rounded">
                    <!-- Back Button... -->
                        <div>
                            <a href="/list" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"> Go Back</i></a>
                        </div>
                    <!-- Back Button... -->

                    <!-- Crard... -->
                        <div class="card">
                            <div style="overflow-x:auto;">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr class="bg-dark text-white">
                                            <td><strong>Thumbnail</strong></td>
                                            <td><strong>Title</strong></td>
                                            <td><strong>Description</strong></td>
                                            <td><strong>Expiry Date</strong></td>
                                            <td><strong>Price</strong></td>
                                            <td><strong>Action</strong></td>
                                        </tr>

                                        @foreach ($category->product as $product)
                                        <tr>
                                            <td><img src="{{ Storage::url($product->picture) }}" height="100" width="100" alt="" /></td>
                                            <td>{{$product['title']}}</td>
                                            <td>{{$product['description']}}</td>
                                            <td>{{$product['expdate']}}</td>
                                            <td>{{$product['price']}}</td>
                                            <td>
                                                <a href="/edit/{{$product->id}}"><button class="btn btn-primary" style="margin: 2px;"><i class="fa fa-edit"></i></button></a>
                                                <a href="/delete/{{$product->id}}"><button class="btn btn-danger" style="margin: 2px;"><i class="fa fa-trash"></i></button></a>
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <!-- Crard... -->
                </div>
            </div>
        </div>
    </body>

</x-app-layout>
