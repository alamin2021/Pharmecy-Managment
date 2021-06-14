@extends('frontend.dashboard.master')

@section('title')
SAPAHAR PHARMA
@endsection


    @section('title-section')
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">Welcome Adminastrator!</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="#">SAPAHAR PHRMA</a></li>
                    <li class="active">ADMIN Dashboard</li>
                </ol>
            </div>
        </div>
    @endsection

@section('content-section')

    <!-- Start Widget -->
    @include('frontend.dashboard.partials.widget')
    <!-- End row-->

    {{-- website status section --}}
    @include('frontend.dashboard.partials.webstatus')
@endsection
