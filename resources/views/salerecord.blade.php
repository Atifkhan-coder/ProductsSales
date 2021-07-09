<x-app-layout>
    @extends('layout')

    <body class="font-sans antialiased min-h-screen bg-gray-100">
            <!-- Sweet Alert... ------->
                {{-- @include('sweet::alert') --}}
        <div class="container-fluid">

            <!-- Start Card... --------------------->
                <div class="card shadow p-3 bg-white rounded" >
                    <div class="card-header font-weight-bold bg-dark  text-white p-3">
                        <h1> SALE RECORD (The Overall sale products record are saved below)</h2>
                    </div>
                    <div class="card-body">

                    </div>
                        <div class="card">
                        <!-- Flash Session... -->
                            @if (session('danger'))
                                <div class="alert alert-danger">{{session('danger')}}</div>
                            @endif
                        <!-- Flash Session... -->
                        <div style="overflow-x:auto;">
                            <table class="table table-striped">
                                <tbody>
                                    <div class="card">
                                    <tr class="bg-dark text-white">
                                        <td><strong>Thumbnail</strong></td>
                                        <td><strong>Tiltle</strong></td>
                                        <td><strong>Description</strong></td>
                                        <td><strong>Expiry Date</strong></td>
                                        <td><strong>Quantity</strong></td>
                                        <td><strong>Price</strong></td>
                                        <td><strong>Total</strong></td>
                                        <td><strong>Action</strong></td>
                                    </tr>
                                    </div>

                                    @foreach ($item as $item)
                                    <tr>
                                        <td><img src="{{ Storage::url($item->image) }}" height="100" width="100" alt="" /></td>
                                        <td>{{$item['title']}}</td>
                                        <td>{{$item['description']}}</td>
                                        <td>{{$item['expdate']}}</td>
                                        <td>{{$item['Qty']}}</td>
                                        <td>{{$item['price']}}</td>
                                        <td>{{$item['total']}}</td>

                                        <td>
                                            <a href="/sale/delete/{{$item['id']}}"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div style="margin-left: 900px;" class="card-body">
                        <strong style="font-size: 25px;">Sale Products Record:</strong><b> {{$sum}}<b>
                    </div>
                </div>
            <!-- End Card... ----------------------->
        </div><br>
    </body>

</x-app-layout>
