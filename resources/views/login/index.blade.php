@extends('layout')
@section('content')


    <div class="card center">
        <div class="card-header text-center"><h1>TWO-Q</h1></div>
        <div class="card-bosy">

        <div class="col-md-12  ">
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif

        <form action="{{ route('check') }}" method="post" style="border:1px solid #ccc">
            <div class="px-5 mb-5 mt-5">
            <h2>Sign In</h2>
            <p>Please fill in this form to Sign In an account.</p>
            <hr>
            {!! csrf_field() !!}
            

            <div class="mb-3">
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" class="form-cntrol" > <br>
            </div>

            <div class="mb-3">
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" class="form-cntrol" ></br>
            </div>

            <div class="clearfix">
            <button type="submit" class="btn btn-primary" value="Login">Sign In</button>
            </div>
            </div>
        </div>
        </form>