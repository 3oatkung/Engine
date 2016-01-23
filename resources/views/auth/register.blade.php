
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
            
            <div class="inner-bg" style="padding-top:5px; ">
                <div class="container" >
                    <div class="row">
                        <div class="col-sm-6 col-md-offset-3 form-box wow fadeInUp">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>สมัครสมาชิก</h3>
                                    <p>กรุณากรอกรายละเอียดเพื่อสมัครสมาชิก:</p>
                                </div>
                                <div class="form-top-right">
                                    <span aria-hidden="true" class="typcn typcn-pencil"></span>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="/auth/register" method="post">
                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">ชือ</label>
                                        <input type="text" name="name" placeholder="ชื่อ" value="{{ old('name') }}" class="form-control input-lg">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">นามสกุล</label>
                                        <input type="text" name="lastname" placeholder="นามสกุล" value="{{ old('lastname') }}" class="form-control input-lg">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">อีเมลล์</label>
                                        <input type="email" name="email" placeholder="อีเมลล์" value="{{ old('email') }}" class="form-control input-lg">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">รหัสผ่าน</label>
                                        <input type="password" name="password" placeholder="รหัสผ่าน" class="form-control input-lg">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-last-name">ยืนยันรหัสผ่าน</label>
                                        <input type="password" name="password_confirmation" placeholder="ยืนยันรหัสผ่าน" class="form-control input-lg">
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4 col-md-offset-8">
                                            <button type="submit" class="btn">สมัครสมาชิก</button>
                                        </div>
                                    </div>

                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

@include('layouts.script')
@endsection

<!--
<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div>
        Name
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        Lastname
        <input type="text" name="lastname" value="{{ old('name') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form> -->