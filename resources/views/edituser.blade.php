{{View:: make('title')}}

@extends('header')
@section('login')
{{View::make('head')}}
<div class="container">
@if(!empty($user))
<form action="useredit?rid={{ $user->id }}" method="post">
@csrf
  <div class="mb-3">
    <label for="InputName" class="form-label">Full Name</label>
    <input maxlength="100" class="form-control" value="{{ $user->name }}" type="text" name="fullname"
    id="InputName">
  </div>
  <div class="mb-3">
    <label for="InputEmail" class="form-label">Email address</label>
    <input maxlength="100" class="form-control" value="{{ $user->email }}" type="email" name="email"
    id="InputEmail">
  </div>
  <div class="mb-3">
    <label for="InputPassword" class="form-label">Password</label>
    <input maxlength="50" class="form-control" value="{{ $user->password }}" type="text" name="password"
    id="InputPassword">
  </div>
  <button type="submit" class="btn btn-warning">Update</button>
  <button type="button" onclick="javascript:history.back()" class="btn btn-secondary">Cancel</button>
</form>
</div>
@else 
No record found
@endif
{{View::make('footer')}}    
@endsection
