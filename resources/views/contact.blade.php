@extends('FrontEndLayout')
@section('content')

<style>
    body
    /* Style inputs */
    input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #cccccc;
    resize: vertical;
    }


    /* Style the container/contact section */
    .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
    }

    /* Create two columns that float next to eachother */
    .column {
    float: left;
    width: 50%;
    margin-top: 6px;
    padding: 20px;
    }

    /* Clear floats after the columns */
    .row:after {
    content: "";
    display: table;
    clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
    .column, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
    }
</style>

</head>
<body>
    <!-- header... -->
        <div class="card">
            <div class="card-body bg-dark text-white">
                <div class="text-center">
                    <h1 style="font-size: 30px;"><strong>Contact us</strong></h1>
                    <p>Swing by for a cup of coffee, or leave us a message:</p>
                </div>
            </div>
        </div>
    <!-- header... -->

    <!-- body... -->
    <div class="card">
        <div class="row">
                <div class="column">
                    <div class="card-body">
                        <img src="images/map.jpg" style="width:100%; height: 460px">
                    </div>
                </div>
            <div class="column">
                <div class="card">
                    <div class="card-header font-weight-bold text-white p-3 bg-dark">
                        <h1>Contact us</h2>
                    </div>
                    <div class="card-body">
                        <form action="contact" method="POST">
                            @csrf

                            <div class="form-group">
                                <strong>First Name:</strong>
                                <input type="text" class="form-control" placeholder="Your First Name.." name="fname">
                                    @error('fname')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <strong>Last Name:</strong>
                                <input type="text" class="form-control" placeholder="Your Last Name.." name="lname">
                                    @error('lname')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <strong>Country:</strong>
                                <select id="country" name="country">
                                    <option value="australia">Australia</option>
                                    <option value="canada">Canada</option>
                                    <option value="usa">USA</option>
                                    <option value="pakistan">Pakistan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <strong>Message:</strong>
                                <textarea  name="msg" placeholder="Write something.." style="height:100px"></textarea>
                                    @error('msg')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                            </div>
                            <button type="create" class="btn btn-primary"> Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
