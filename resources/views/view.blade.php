<x-app-layout>
    @extends('layout')

    <body class="font-sans antialiased min-h-screen bg-gray-100">
        <div class="min-h-screen bg-gray-100">
            <div class="container-fluid">
                <!-- Start Card... ------------->
                <div class="card shadow p-3 bg-white rounded">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-">
                                <tr>
                                    <div>
                                        <a href="/list" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"> Go Back</i></a>
                                    </div>
                                </tr><br>
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
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End Card... ------------->
            </div>
        </div>
    </body><br>

</x-app-layout>
