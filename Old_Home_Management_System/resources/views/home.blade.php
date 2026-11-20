@extends('layouts.header_footer')

@section('title', 'Home Page')

@section('content')
<div class="card">
    <h2>Welcome to The Old Home Management System</h2>
    <p>Would you like to create an Account or Login?</p>
    <br>
    <a href="/register" class="btn">Create Account</a>
    <a href="/login" class="btn">Login</a>
</div>
@endsection