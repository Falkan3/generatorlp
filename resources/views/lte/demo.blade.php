<?php use App\Photo; ?>

@extends('layouts.lte')
@section('title')
    Demo page | index
@stop

@section('content')
    <!-- Left side column. contains the logo and sidebar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            @if($errors->any())
                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-info"></i> Alert</h4>
                    {{$errors->first()}}
                </div>
            @endif

            @if (Auth::check())
                <div class="row">
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3> {{count(Photo::where('user_id', Auth::user()->id)->withTrashed()->get())}}</h3>

                                <p>Photos uploaded by you</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">View recent <i
                                        class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->

                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>{{count(Photo::where('user_id', Auth::user()->id)->withTrashed()->where('created_at', '>=', date('Y-m-d').' 00:00:00')->get())}}</h3>

                                <p>Photos uploaded this week</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->


                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Gallery</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                class="fa fa-minus"></i>
                                    </button>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-box-tool dropdown-toggle"
                                                data-toggle="dropdown">
                                            <i class="fa fa-wrench"></i></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{{route('photo.create')}}">Upload a photo</a></li>
                                        </ul>
                                    </div>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                                class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12 images">
                                        @if(count($photos)==0)
                                            <p>No photos in your gallery.</p>
                                        @else
                                            @foreach($photos as $photo)
                                                <div class="col-xs-12 col-sm-6 col-md-4">
                                                    <a href="{{url('photo') . "/" . $photo['id']}}"><img
                                                                src="{{URL::asset($photo['attributes']['location'])}}"
                                                                alt="{{$photo['title']}}"/></a>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- ./box-body -->
                            <div class="box-footer">
                                <div class="row">
                                    @if(app('request')->input('offset')>=6)
                                        <p class="text-center"><a
                                                    href="{{url('previous')."?offset=".(app('request')->input('offset')-6)}}">
                                                Previous</a></p>
                                    @else
                                        <p class="text-center">Previous</p>
                                    @endif
                                    <p class="text-center">Page: {{app('request')->input('offset')/6}}</p>
                                    <p class="text-center"><a
                                                href="{{url('next')."?offset=".(app('request')->input('offset')+6)}}">Next
                                        </a></p>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.box-footer -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            @else
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Welcome</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                                class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="text-center">
                                            Please login to manage your photo gallery and begin your experience.
                                        </p>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- ./box-body -->
                            <div class="box-footer">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Last update: 28.11.2016 r.</p>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.box-footer -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            @endif

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Footer -->

    <!-- Control Sidebar -->
@stop