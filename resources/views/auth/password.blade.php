
    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </ul>
    @endif



@extends('layouts.app')

@section('title')
    eXvertise - มาสร้างธุรกิจไปพร้อมกับเรา
@endsection

@section('content')
        <!-- Loader -->

        <!-- Top content -->
        <div class="top-content" >
            
            <!-- Top menu -->
            <nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">Marco - Bootstrap Landing Page</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="top-navbar-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="btn btn-link-2" href="{{url()}}">กลับสู่หน้าหลัก</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            

            @if (session('status'))

            <div class="inner-bg" style="padding-top:60px; ">
                <div class="container" >
                    <div class="row">
                        <div class="col-sm-6 col-md-offset-3 form-box wow fadeInUp">
                            <div class="form-top">
                                <div >
                                    <h3 style="text-align: center; color:white; padding-top: 20px;">อีเมลล์ สำหรับล้างรหัสผ่าน ถูกส่งแล้ว</h3>
                                    <p style="text-align: center; color:white;">กรุณาเข้าสู่อีเมลล์ของคุณ และ คลิกลิงค์เพื่อตั้งรหัสผ่านใหม่</p>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="/" method="get">
                                    {!! csrf_field() !!}

                                    <div class="row">
                                        <div class="col-sm-4 col-md-offset-4">
                                            <button type="submit" class="btn">กลับสู่หน้าหลัก</button>
                                        </div>
                                    </div>

                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @else

            <div class="inner-bg" style="padding-top:5px; ">
                <div class="container" >
                    <div class="row">
                        <div class="col-sm-6 col-md-offset-3 form-box wow fadeInUp">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>ล้างรหัสผ่าน</h3>
                                    <p>กรุณากรอกอีเมลล์ที่ต้องการล้างรหัสผ่าน:</p>
                                </div>
                                <div class="form-top-right">
                                    <span aria-hidden="true" class="typcn typcn-pencil"></span>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="/password/email" method="post">
                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">อีเมลล์</label>
                                        <input type="email" name="email" placeholder="อีเมลล์ที่ต้องการล้างรหัสผ่าน" value="{{ old('email') }}" class="form-control input-lg">
                                    </div>      
                        
                                    <div class="row">
                                        <div class="col-sm-3 col-md-offset-9">
                                            <button type="submit" class="btn">ส่งอีเมลล์</button>
                                        </div>
                                    </div>

                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endif
            
        </div>

@include('layouts.script')
@endsection