@extends('layouts.app')

@section('title')
	eXvertise - มาสร้างธุรกิจไปพร้อมกับเรา
@endsection

@section('content')
        <!-- Loader -->
    	<div class="loader">
    		<div class="loader-img"></div>
    	</div>

@include('layouts.main')
@include('layouts.why')
@include('layouts.learning_step')
@include('layouts.who')
@include('layouts.signup_step')
@include('layouts.price')

@include('layouts.modal_payment')
@include('layouts.footer')
@include('layouts.script')





<!--
	<hr>
	<h1>User Authentication Section</h1>
	<hr>
	<a href="auth/login">Login</a><br>
	<a href="auth/logout">Logout</a><br>
	<a href="auth/register">Register</a>
	<br>
	<br>
	<hr>
	<h1>Member Section</h1>
	<hr>
	<a href="lesson">Lesson Index</a><br>
	<br>
	<br>
	<hr>
	<h1>Admin System</h1>
	<hr>
	<a href="user">User List</a><br>
	<a href="lessonAdmin">Lesson List</a>
-->
@endsection