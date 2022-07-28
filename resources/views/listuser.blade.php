{{View:: make('title')}}
<link href="/css/bootstrap.min.css" rel="stylesheet">
<script src="/js/bootstrap.bundle.min.js"></script>

@extends('header')
@section('login')
{{View::make('head')}}
<div class="container">
<div class="table-responsive">
@if(count($listofuser))
    <table class="table table-striped table-sm">
        <thead>
            <tr>
            <th scope="col" width="40">#</th>
            <th scope="col">Full Name</th>
            <th scope="col">Email Address</th>
            <th scope="col">Password</th>
            <th scope="col" width="155">Created On</th>
            <th scope="col" width="155">Updated On</th>
            <th scope="col" width="60">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($listofuser as $user)
         <tr>
             <td>{{ $loop->iteration }}</td>
             <td>{{ $user->name }}</td>
             <td>{{ $user->email }}</td>
             <td>{{ $user->password }}</td>
             <td>@if($user->created_at) {{ date('D, d F Y',strtotime($user->created_at)) }} @else N/A @endif</td>
             <td>@if($user->updated_at) {{ date('D, d F Y',strtotime($user->updated_at)) }} @else N/A @endif</td>
             <td><a href="/editmyuser?rid={{ $user->id }}" class="text-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                 <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/></svg></a>
                 <a data-bs-toggle="modal" href="#modalToggle" id="delete"
                 data-id="{{ $user->id }}" role="button" class="text-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg></a>
                 {{-- <a href="/userdelete?rid={{ $user->id }}" onclick="getConfirmation()">Delete</a> --}}
            </td>
         </tr>@endforeach
        </tbody>
       </table>
     </div>
<div class="pagination">
 
<style>
.h-5 {
height: 1em;
}

.flex {
text-align: center;
width: 100%;
}

.leading-5{
padding: 0.7em;
}

</style>

{{ $listofuser->appends(['search' => Request::get('search')])->links() }}
@else
No record found
@endif
</div>
</div>

@if (session('delete'))
        <div class="alert alert-delete">
            {{ session('delete') }}
        </div>
    @endif
    

<div class="modal fade" id="modalToggle" aria-hidden="true" aria-labelledby="modalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-body p-4 text-center">
                    <h5 class="mb-0">Delete user account?</h5>
                    <p class="mb-0">Are you sure you want to delete this record?</p>
                </div>

                <script>
                    // 'Getting' data-attributes using getAttribute
                    var userid = document.getElementById('delete').getAttribute('data-id');
                </script>

                <div class="modal-footer flex-nowrap p-0">
                    <button type="button" class="btn btn-lg fs-6 text-decoration-none col-6 m-0 rounded-0 border-right"
                        data-bs-target="#modalToggle2" data-bs-toggle="modal"
                        data-bs-dismiss="modal"><strong>Delete</strong></button>
                    <button type="button" class="btn btn-lg fs-6 text-decoration-none col-6 m-0 rounded-0"
                        data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalToggle2" aria-hidden="true" aria-labelledby="modalToggleLabel2"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    This record has been successfully deleted.
                </div>
                <div class="modal-footer flex-column">
                    <button type="button" class="btn btn-lg fs-6 text-decoration-none col-6 m-0 rounded-0"
                        data-bs-dismiss="modal" onclick="location.href='/userdelete?rid='+userid;">OK</button>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection 


             


