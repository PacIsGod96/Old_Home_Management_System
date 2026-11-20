@extends('layouts.header_footer')

@section('title', 'Login')

@section('content')
<div class="card">
    <h2>Login to Your Account</h2>
    <form action="/login" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="btn">Login</button>
    </form>
</div>
@endsection