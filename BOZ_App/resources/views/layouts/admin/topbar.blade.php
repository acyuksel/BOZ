<nav class="mb-4 bg-white shadow navbar navbar-expand navbar-light topbar static-top">
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="mr-3 btn btn-link d-md-none rounded-circle">
        <i class="fa fa-bars"></i>
    </button>
    
    @yield('title') {{--  Nog stylen --}}
    
    <!-- Hier komt naam van ingelogde user en dropdown voor logout -->
    <ul class="ml-auto navbar-nav">
    <form action="{{route('logout')}}" method="POST">
        @csrf
        <input type="submit" class="btn btn-primary" value="{{__('Logout')}}"/>
    </form>
    </ul>
</nav>