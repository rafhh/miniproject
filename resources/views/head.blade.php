{{View::make('title')}}

  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between p-3 mb-3 bg-light border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" fill="currentColor" class="bi bi-egg-fried" viewBox="0 0 16 16">
          <path d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          <path d="M13.997 5.17a5 5 0 0 0-8.101-4.09A5 5 0 0 0 1.28 9.342a5 5 0 0 0 8.336 5.109 3.5 3.5 0 0 0 5.201-4.065 3.001 3.001 0 0 0-.822-5.216zm-1-.034a1 1 0 0 0 .668.977 2.001 2.001 0 0 1 .547 3.478 1 1 0 0 0-.341 1.113 2.5 2.5 0 0 1-3.715 2.905 1 1 0 0 0-1.262.152 4 4 0 0 1-6.67-4.087 1 1 0 0 0-.2-1 4 4 0 0 1 3.693-6.61 1 1 0 0 0 .8-.2 4 4 0 0 1 6.48 3.273z"/>
          </svg></a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Features</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
        <li><a href="/userlist" class="nav-link px-2 link-dark">Userlist</a></li>
      </ul>

      <form action="userlist" method="post" class="col-12 col-md-auto mb-2 justify-content-end mb-md-0">
        @csrf  
        <input value="{{ request()->input('search')}}" name="search" id="search" type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>
        
      <div class="col-md-3 text-end">
        <button type="button" onclick="window.location='/register'" class="btn btn-warning">Register</button>
      </div>
    </header>
  </div>

  