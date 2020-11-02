<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>PaccoSpedito Customer Panel</title>
    <link rel='stylesheet' href='/css/bootstrap.css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="/css/select2.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

</head>
<body>
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="material-icons">view_week</i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="dashboard.php">
                        <img src="/img/logo.png" width="100%">
                    </a>
                    <div id="close-sidebar">
                        <i class="material-icons">close</i>
                    </div>
                </div>

                <div class="sidebar-menu">
                    <ul>
                        <li>
                            <a href="/parcel">
                                <i class="material-icons md-24">apps</i>
                                <span>parcel</span>
                            </a>
                        </li>
                        <li>
                            <a href="/history">
                                <i class="material-icons md-24">apps</i>
                                <span>history</span>
                            </a>
                        </li>
                        <li>
                            <a href="/invoice">
                                <i class="material-icons md-24">apps</i>
                                <span>invoice</span>
                            </a>
                        </li>
                        <li>
                            <a href="/notification">
                                <i class="material-icons md-24">apps</i>
                                <span>notification<span class="badge badge-light">4</span></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
        </nav>
        <!-- sidebar-wrapper  -->
        <div class="dashboard-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="header-right">
                            <div class="navbar-profile">
                            @if(Auth::guard('web')->check())
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        John Doe
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="profile-edit.php">My Profile</a>
                                        <a class="dropdown-item" href="change-password.php">Change Password</a>
                                        <a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                                <img class="profile-pic" src="/img/profile.jpg" alt="profile pic">
                            @endif
                            @if(Auth::guard('admin')->check())
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        John Doe
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="profile-edit.php">My Profile</a>
                                        <a class="dropdown-item" href="change-password.php">Change Password</a>
                                        <a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#admin-logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                                <img class="profile-pic" src="/img/profile.jpg" alt="profile pic">
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <main class="container mt-4">
            @yield('content')
        </main>

</div>


{{-- <script src="{{asset('js/app.js')}}"></script> --}}

<!-- page-wrapper -->
<script src='/js/jquery-3.4.1.min.js'></script>
<script src='/js/popper.js'></script>
<script src='/js/bootstrap.js'></script>
<script src="/js/jquery.dataTables.min.js"></script>
<script src="/js/dataTables.bootstrap4.min.js"></script>
<script src="/js/select2.min.js"></script>
<script src="/js/script.js"></script>



    
    {{-- Success Alert --}}
    @if(session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    {{-- Error Alert --}}
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <script>
        //close the alert after 3 seconds.
        $(document).ready(function(){
			setTimeout(function() {
	        	$(".alert").alert('close');
	    	}, 3000);
    	});
    </script>
    
</body>
</html>