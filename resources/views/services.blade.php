@extends('FrontEndLayout')
@section('content')

<style>

    .icon-primary {
        color: #062caf
    }

    .icon-bg-circle {
        position: relative
    }

    .icon-lg {
        font-size: 50px
    }

    .icon-bg-circle::before {
        z-index: 1;
        position: relative
    }

    .icon-bg-primary::after {
        background: #062caf !important
    }

    .icon-bg-circle::after {
        content: '';
        position: absolute;
        width: 68px;
        height: 68px;
        top: -35px;
        left: 15px;
        border-radius: 50%;
        background: inherit;
        opacity: .1
    }

    .icon-bg-yellow::after {
        background: #f6a622 !important
    }

    .icon-bg-purple::after {
        background: #7952f5
    }

    .icon-yellow {
        color: #f6a622
    }

    .icon-purple {
        color: #7952f5
    }

    .icon-cyan {
        color: #02d0a1
    }

    .icon-bg-cyan::after {
        background: #02d0a1
    }

    .icon-bg-red::after {
        background: #ff4949
    }

    .icon-red {
        color: #ff4949
    }

    .icon-bg-green::after {
        background: #66cc33
    }

    .icon-green {
        color: #66cc33
    }

    .icon-bg-orange::after {
        background: #ff7c17
    }

    .icon-orange {
        color: #ff7c17
    }

    .icon-bg-blue::after {
        background: #3682ff
    }

    .icon-blue {
        color: #3682ff
    }
</style>

<body class="min-h-screen bg-gray-100">
<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="card">
            <div class="card-body text-white bg-dark">
                <h1 style="font-size: 30px"><strong>Services</strong></h1>
                <p style="font-size: 20px">Our Service Area. The following services are  </p>
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card border-0 shadow rounded-xs pt-5">
                <div class="card-body"> <i class="fa fa-object-ungroup icon-lg icon-primary icon-bg-primary icon-bg-circle mb-3"></i>
                    <h4 class="mt-4 mb-3">Networking</h4>
                    <p>For what reason would it be advisable for me to think about business content?</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card border-0 shadow rounded-xs pt-5">
                <div class="card-body"> <i class="fa fa-users icon-lg icon-yellow icon-bg-yellow icon-bg-circle mb-3"></i>
                    <h4 class="mt-4 mb-3">Social Activity</h4>
                    <p>For what reason would it be advisable for me to think about business content?</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card border-0 shadow rounded-xs pt-5">
                <div class="card-body"> <i class="fa fa-desktop icon-lg icon-purple icon-bg-purple icon-bg-circle mb-3"></i>
                    <h4 class="mt-4 mb-3">Web Design</h4>
                    <p>For what reason would it be advisable for me to think about business content?</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card border-0 shadow rounded-xs pt-5">
                <div class="card-body"> <i class="fa fa-cloud icon-lg icon-cyan icon-bg-cyan icon-bg-circle mb-3"></i>
                    <h4 class="mt-4 mb-3">Cloud Service</h4>
                    <p>For what reason would it be advisable for me to think about business content?</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card border-0 shadow rounded-xs pt-5">
                <div class="card-body"> <i class="fa fa-comments icon-lg icon-red icon-bg-red icon-bg-circle mb-3"></i>
                    <h4 class="mt-4 mb-3">Consulting</h4>
                    <p>For what reason would it be advisable for me to think about business content?</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card border-0 shadow rounded-xs pt-5">
                <div class="card-body"> <i class="fa fa-search-plus icon-lg icon-green icon-bg-green icon-bg-circle mb-3"></i>
                    <h4 class="mt-4 mb-3">SEO Optimization</h4>
                    <p>For what reason would it be advisable for me to think about business content?</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card border-0 shadow rounded-xs pt-5">
                <div class="card-body"> <i class="fa fa-user icon-lg icon-orange icon-bg-orange icon-bg-circle mb-3"></i>
                    <h4 class="mt-4 mb-3">Usability Testing</h4>
                    <p>For what reason would it be advisable for me to think about business content?</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card border-0 shadow rounded-xs pt-5">
                <div class="card-body"> <i class="fa fa-envelope icon-lg icon-blue icon-bg-blue icon-bg-circle mb-3"></i>
                    <h4 class="mt-4 mb-3">UX Prototyping</h4>
                    <p>For what reason would it be advisable for me to think about business content?</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</body>

@endsection
