<!-- <form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <a href="{{url()}}/password/email">Reset Password</a>
    </div>
    <div>
        <a href="{{url()}}/auth/register">Register</a>
    </div>
    <div>
        <button type="submit">Login</button>
    </div>
</form>

-->



    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
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
                            <li><a class="btn btn-link-2" href="/auth/register">สมัครสมาชิกใหม่</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            
            <div class="inner-bg" style="padding-top:60px; ">
                <div class="container" >
                    <div class="row">
                        <div class="col-sm-6 col-md-offset-3 form-box wow fadeInUp">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>เข้าสู่ระบบ</h3>
                                    <p>กรุณาเข้าสู่ระบบเพื่อใช้งาน:</p>
                                </div>
                                <div class="form-top-right">
                                    <span aria-hidden="true" class="typcn typcn-pencil"></span>
                                </div>
                            </div>
                            <div class="form-bottom">

                                <form role="form" action="/auth/login" method="POST">
                                    {!! csrf_field() !!}

                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">อีเมลล์</label>
                                        <input type="text" name="email" placeholder="อีเมลล์" class="form-control input-lg">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-last-name">รหัสผ่าน</label>
                                        <input type="password" name="password" placeholder="รหัสผ่าน" class="form-control input-lg" >
                                    </div>
                                    <div class="row">                               
                                        <div class="col-sm-6">
                                            <input type="checkbox" name="remember"><a style="color:white;"> จดจำการใช้งาน</a>  
                                        </div>
                                        <div class="col-sm-6" style="text-align: right;">
                                          <a style="color:white;" href="/password/email"> ลืมรหัสผ่าน</a>  
                                        </div>
    
                                    </div>  
                                    <button type="submit" class="btn">เข้าสู่ระบบ</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

@include('layouts.script')
@endsection