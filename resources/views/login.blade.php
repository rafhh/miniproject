{{View::make('title')}}

@extends('header')
@section('login')
{{View::make('head')}}
  @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('notmatch'))
        <div class="alert alert-notmatch">
            {{ session('notmatch') }}
        </div>
    @endif
    
<div class="card bg-light w-25 h-">
     <div class="card-body">
<form action="login" method="post">
  <body class="text-center">
    <main class="form-signin">
        <img class="mt-5 mb-5" src="../assets/brand/egg-fried.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
@csrf
    <div class="form-floating">
        <input type="email" name="email" class="form-control" id="InputEmail" placeholder="name@example.com">
        <label for="InputEmail">Email Address</label>
    </div>
    <div class="form-floating">
        <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Password">
        <label for="InputPassword">Password</label>
    </div>
    <div class="checkbox mb-3">
    <label>
        <input type="checkbox" value="remember-me"> Remember me
    </label>
    </div>
    <button type="submit" class="btn btn-outline-secondary me-2">Login</button>
    <button type="button" onclick="window.location='/register'"
    class="btn btn-warning">Register</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
</form>
    </main>

      </div>
       </div>
    </body>
{{View::make('footer')}}    
@endsection


<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
}
</style>