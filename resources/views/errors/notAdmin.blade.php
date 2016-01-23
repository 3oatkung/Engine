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
                        <a class="navbar-brand">Marco - Bootstrap Landing Page</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="top-navbar-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="btn btn-link-2" href="{{url()}}">กลับสู่หน้าหลัก</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            
                        <div class="inner-bg">
                <div class="container">


           <div class="inner-bg" style="padding-top:60px; ">
                <div class="container" >
                    <div class="row">
                        <div class="col-sm-6 col-md-offset-3 form-box wow fadeInUp">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>ล้างรหัสผ่าน</h3>
                                    <p>กรุณากรอกอีเมลล์ และ รหัสผ่านใหม่:</p>
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

                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">รหัสผ่านใหม่</label>
                                        <input type="password" name="password" placeholder="รหัสผ่านใหม่" class="form-control input-lg">
                                    </div>

                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">ยืนยันรหัสผ่านใหม่</label>
                                        <input type="password" name="password_confirmation" placeholder="ยืนยันรหัสผ่านใหม่"  class="form-control input-lg">
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3 col-md-offset-9">
                                            <button type="submit" class="btn">ล้างรหัสผ่าน</button>
                                        </div>
                                    </div>

                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
 

                </div>
            </div>
            
        </div>


@include('layouts.modal_payment')
@include('layouts.script')
@endsection