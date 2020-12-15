@extends('layouts.basics_dom')

@section('title','Lets begin')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/login.css')}}">
@endsection

@section('content')
<main class="form-signin mt-5 mb-5">
    <form method="POST" action="/anim">
        @csrf
      <img class="mb-4" src="https://img2.freepng.es/20180331/eow/kisspng-computer-icons-user-clip-art-user-5abf13db298934.2968784715224718991702.jpg" alt="" width="72">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
      <label for="inputEmail" class="visually-hidden">Email address</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="visually-hidden">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    </form>
  </main>

@endsection