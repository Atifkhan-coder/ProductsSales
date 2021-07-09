@extends('FrontEndLayout')
@section('content')

<!-- Start Card... ------------->
    <div class="card">
        <div class="card-body">
            <table class="table">
                <tr>
                    <div>
                        <td><a href="/home" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"> Go Back</li></a></td>
                        <h3 style="color: red;"><strong>Note: <i>Got to bottom & buy product successfully.</i></strong></h3>
                    </div>
                </tr>
                <tr>
                    <td><strong>Image:</strong></td>
                    <td><img src="{{ Storage::url($his->picture) }}" style="height: 220px; margin-right: 200px;" /></td>
                </tr>
                <tr>
                    <td><strong>Title:</strong></td>
                    <td>{{ $his->title }}</td>
                </tr>
                <tr>
                    <td><strong>Description:</strong></td>
                    <td>{{ $his->description }}</td>
                </tr>
                <tr>
                    <td><strong>Expiry Date:</strong></td>
                    <td>{{ $his->expdate }}</td>
                </tr><tr>
                    <td><strong>Price:</strong></td>
                    <td><strong>Rs:</strong> {{ $his->price }}</td>
                </tr>
                <tr>
                    <td>
                        <a href="/buy/{{$his['id']}}"><button class="btn btn-success ">
                            <i class="fa fa-cart-plus"> Add to Cart</i></button>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
<!-- End Card... ------------->

@endsection
