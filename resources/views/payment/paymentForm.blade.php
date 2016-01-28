
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
                                    <h3>แจ้งการชำระเงิน</h3>
                                    <p>เมื่อคุณแจ้งการชำระเงิน บัญชีของคุณจะใช้งานได้ทันที:</p>
                                </div>
                                <div class="form-top-right">
                                    <span aria-hidden="true" class="typcn typcn-pencil"></span>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="/createPayment/" method="post">
                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">ชือผู้ชำระเงิน</label>
                                        <input type="text" name="name" placeholder="ชื่อชือผู้ชำระเงิน" value="{{ old('name') }}" class="form-control input-lg">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">อีเมลล์ที่ต้องการใช้งาน</label>
                                        <input type="email" name="email" placeholder="อีเมลล์ที่ต้องการใช้งาน" value="{{ old('email') }}" class="form-control input-lg">
                                    </div>      
                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">วันที่ชำระเงิน</label>
                                        <input type="text" name="date" placeholder="วันที่ชำระเงิน (วัน/เดือน/ปี)" value="{{ old('lastname') }}" class="form-control input-lg">
                                    </div>

                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">เวลาชำระเงิน</label>
                                        <input type="text" name="time" placeholder="เวลาชำระเงิน (ชั่วโมง/นาที)" class="form-control input-lg">
                                    </div>

                                    <div class="form-group">
                                      <label class="sr-only" for="form-first-name">วิธีการชำระเงิน</label>
                                      <select type="text" name="paymentMethod" placeholder="วิธีการชำระเงิน" class="form-control input-lg">
                                        <option>ชำระผ่าน Paypal</option>
                                        <option>ชำระผ่าน การโอนเงิน</option>
                                      </select>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-5 col-md-offset-7">
                                            <button type="submit" class="btn">แจ้งการชำระเงิน</button>
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