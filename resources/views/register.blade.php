{{View::make('title')}}

@extends('header')
@section('login')
{{View::make('head')}}
<div class="container">
<form action="register" method="post">
@csrf
    <div class="mb-3">
        <label for="InputName" class="form-label">Full Name</label>
        <input type="text" class="form-control" name="fullname" id="InputName">
</div>
<div class="mb-3">
    <label for="InputEmail" class="form-label">Email Address</label>
    <input type="email" class="form-control" name="email" id="InputEmail"
    aria-describedby="emailHelp">
    <div id ="emailHelp" class="form-text">We'll never share your email with anyone else. </div>
</div>
<div class="mb-3">
    <label for="InputPassword" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="InputPassword">
</div>
<button type="submit" class="btn btn-warning">Register</button>
<button type="button" onclick="javascript:history.back()" class="btn btn-secondary">Cancel</button>
</form>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Successfully Register! </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
     Launch demo modal
    </button>  
{{View::make('footer')}}    
@endsection

