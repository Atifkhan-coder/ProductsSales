@extends('FrontEndLayout')
@section('content')
    <!--Product List... ----------------------------------------------------------------------><br>
            <div class="card">
                <div class="card-body">
                    <div style="border-bottom: 1px solid rgb(233, 230, 230)">
                        <strong style="font-size: 30px;">Result For Search Products</strong>
                    </div>
                    @foreach ($his as $store)
                            <div class="card" style="float: left; width:242px;">
                                    <table class="table table-bordered">
                                        <tr>
                                            <img style="height: 150px;" src="{{ Storage::url($store->picture) }}"/>
                                        </tr>
                                        <tr>
                                            <td><strong>Title:</strong> {{$store['title']}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Description:</strong> {{$store['description']}}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="detail/{{$store['id']}}">
                                                    <button class="btn btn-primary" style="width:100%;"><i class="fa fa-shopping-cart" aria-hidden="true"> Click & Buy</i></button>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                            </div>
                    @endforeach
                 </div>
            </div>
    <!-- End Product List... --------------------------------------------------------------->
@endsection

