<form action="userlist" method="post">
    @csrf
        <input value="{{ request()->input('search')}}"
        name="search" id="search" type="search" placeholder="Search...">
        <input type="submit" value="search">
</form>



