@extends('layouts.master')



@section('content')

    <!-- Header -->
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="icon_mobile"></i> Generate Token</h3>
        </div>
    </div>

    <!-- Content -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="pull-left">New Token</div>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <div class="padd">

                <div class="form quick-post">
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{ \Illuminate\Support\Facades\Auth::user()->id }}">
                    <div class="row">
                        <button type="button" class="btn btn-primary token-generator">Generate Token</button>
                    </div>
                    <div class="row">
                        <p>Token: <span class="token-value"></span></p>
                    </div>
                </div>


            </div>
            <div class="widget-foot">
                <!-- Footer goes here -->
            </div>
        </div>
    </div>
    @if($errors->any())
        <div class="row">
            <div class="alert alert-dismissible alert-danger col-md-6 col-md-offset-3">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    @if(session()->get('report'))
        <div class="row">
            <div class="alert alert-dismissible alert-success col-md-6 col-md-offset-3">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{ session()->get('report') }}</strong>.
            </div>
        </div>
    @endif

@endsection