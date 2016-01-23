@extends('layouts.app')

@section('title')
    eXvertise - มาสร้างธุรกิจไปพร้อมกับเรา
@endsection

@section('content')
        <!-- Loader -->

        <!-- Top content -->
        <div class="top-content" >
            
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