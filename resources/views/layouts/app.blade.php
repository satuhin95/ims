<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  
    <link rel="stylesheet" href="{{asset('public/admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('public/admin/assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/admin/assets/libs/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/assets/libs/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/assets/libs/css/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/assets/vendor/charts/chartist-bundle/chartist.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/assets/vendor/charts/morris-bundle/morris.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/assets/vendor/charts/c3charts/c3.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/assets/vendor/fonts/flag-icon-css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    
</head>
<body>
 <div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- navbar -->
    <!-- ============================================================== -->
    @guest

    @else
    <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <a class="navbar-brand" href="index.html">Concept</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right-top">
                    <li class="nav-item">
                        <div id="custom-search" class="top-search-bar">
                            <input class="form-control" type="text" placeholder="Search..">
                        </div>
                    </li>
                    <li class="nav-item dropdown notification">
                        <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                        <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                            <li>
                                <div class="notification-title"> Notification</div>
                                <div class="notification-list">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action active">
                                            <div class="notification-info">
                                                <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                    <div class="notification-date">2 min ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="notification-info">
                                                <div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                    <div class="notification-date">2 days ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="notification-info">
                                                <div class="notification-list-user-img"><img src="assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                    <div class="notification-date">2 min ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="notification-info">
                                                <div class="notification-list-user-img"><img src="assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                    <div class="notification-date">2 min ago</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="list-footer"> <a href="#">View all notifications</a></div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown connection">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                            <li class="connection-list">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                        <a href="#" class="connection-item"><img src="assets/images/github.png" alt="" > <span>Github</span></a>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                        <a href="#" class="connection-item"><img src="assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                        <a href="#" class="connection-item"><img src="assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                        <a href="#" class="connection-item"><img src="assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                        <a href="#" class="connection-item"><img src="assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                        <a href="#" class="connection-item"><img src="assets/images/slack.png" alt="" > <span>Slack</span></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="conntection-footer"><a href="#">More</a></div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown nav-user">
                        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('public/admin/assets/images/avatar-1.jpg')}}" alt="" class="user-avatar-md rounded-circle"></a>
                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                            <div class="nav-user-info">
                                <h5 class="mb-0 text-white nav-user-name">{{ Auth::user()->name }}</h5>
                                <span class="status"></span><span class="ml-2">Available</span>
                            </div>
                            <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}<i class="fas fa-power-off mr-2"></i></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- ============================================================== -->
    <!-- end navbar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- left sidebar -->
    <!-- ============================================================== -->
    <div class="nav-left-sidebar sidebar-dark">
        <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                            Menu
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Pos <span class="badge badge-success">6</span></a>
                            <div id="submenu-1" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">Dashboard</a>
                                        <div id="submenu-1-2" class="collapse submenu" style="">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{route('pos')}}">Pos</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{route('pening.order')}}">Pending Orders</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="ecommerce-product-single.html">Product Single</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="ecommerce-product-checkout.html">Product Checkout</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="far fa-user"></i>Empolyee</a>
                            <div id="submenu-2" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{URL::to('/add-employee')}}">Add Employee</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{URL::to('/all-employee')}}">All Employee</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-user-friends"></i></i>Customer</a>
                            <div id="submenu-3" class="collapse submenu" style="">
                                <ul class="nav flex-column">

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{URL::to('/add-customer')}}">Add Customer</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{URL::to('/all-customer')}}">All Customer</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Supplier</a>
                            <div id="submenu-4" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{URL::to('/add-supplier')}}">Add Supplier</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{URL::to('/all-supplier')}}">All Supplier</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Salary</a>
                            <div id="submenu-5" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{URL::to('/pay-salary')}}">Pay Salary</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Lest Month Salary</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{URL::to('/advanced-salary')}}">Advenced Salary</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{URL::to('/all-advanced-salary')}}">All Advenced Salary</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-divider">
                            Features
                        </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Category <span class="badge badge-secondary">New</span></a>
                                <div id="submenu-7" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{URL::to('/add-category')}}">Add Category</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{URL::to('/all-category')}}">All Category</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-fw fa-columns"></i>Product</a>
                                <div id="submenu-8" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{URL::to('/add-product')}}">Add Product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{URL::to('/all-product')}}">All Product</a>
                                        </li>
                                         <li class="nav-item">
                                            <a class="nav-link" href="{{route('import.product')}}">Import Product</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fas fa-fw fa-map-marker-alt"></i>Expense</a>
                                <div id="submenu-9" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{URL::to('/add-expense')}}">Add Expense</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{URL::to('/day-expense')}}">Today Expense</a>
                                           </li> 
                                           <li class="nav-item">
                                            <a class="nav-link" href="{{URL::to('/month-expense')}}">Monthly Expense</a>
                                           </li>
                                           <li class="nav-item">
                                            <a class="nav-link" href="{{URL::to('/yearly-expense')}}">Yearly Expense</a>
                                           </li> 
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10">
                                    <i class="fas fa-f fa-folder"></i>Attendence</a>
                                <div id="submenu-10" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{URL::to('/add-attendence')}}">Take Attendence</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{URL::to('/all-attendence')}}">All Attendence</a>
                                        </li>
 >
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        @endguest
    </div>
    <div class="dashboard-wrapper">
        <main class="py-4">
            @yield('content')
        </main>

    </div>   
    <script>
        @if(Session::has('messege'))
        var type="{{Session::get('alert-type','info')}}"
        switch(type){
          case 'info':
          toastr.info("{{ Session::get('messege') }}");
          break;
          case 'success':
          toastr.success("{{ Session::get('messege') }}");
          break;
          case 'warning':
          toastr.warning("{{ Session::get('messege') }}");
          break;
          case 'error':
          toastr.error("{{ Session::get('messege') }}");
          break;
      }
      @endif

      <script type="text/javascript">
      $(document).on("clik","#delete",function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        swal({
            title: "Are You want to delete? ",
            text: "Once Delete, This will be Permanently Delete",
            icon: "warning",
            buttons:true,
            dangerMode: true,
        })
        .then((willDelete)=>{
            if (willDelete) {
                window.location.href = link;
            }
            else{
                swal("Safe Data!");
            }
        });
    });
</script>
<script>  
   $(document).on("click", "#delete", function(e){
       e.preventDefault();
       var link = $(this).attr("href");
       swal({
          title: "Are you Want to delete?",
          text: "Once Delete, This will be Permanently Delete!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
      })
       .then((willDelete) => {
          if (willDelete) {
             window.location.href = link;
         } else {
            swal("Safe Data!");
        }
    });
   });
</script>
<!-- new -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- Custom scripts for this template -->
<script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
<!-- end new -->

<script src="{{asset('public/admin/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
<!-- bootstap bundle js -->
<script src="{{asset('public/admin/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
<!-- slimscroll js -->
<script src="{{asset('public/admin/assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
<!-- main js -->
<script src="{{asset('public/admin/assets/libs/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/admin/assets/libs/js/sweetalert.min.js')}}"></script>
<script src="{{asset('public/admin/assets/libs/js/toastr.min.js')}}"></script>
<script src="{{asset('public/admin/assets/libs/js/main-js.js')}}"></script>
<!-- chart chartist js -->
<script src="{{asset('public/admin/assets/vendor/charts/chartist-bundle/chartist.min.js')}}"></script>
<!-- sparkline js -->
<script src="{{asset('public/admin/assets/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
<!-- morris js -->
<script src="{{asset('public/admin/assets/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
<script src="{{asset('public/admin/assets/vendor/charts/morris-bundle/morris.js')}}"></script>
<!-- chart c3 js -->
<script src="{{asset('public/admin/assets/vendor/charts/c3charts/c3.min.js')}}"></script>
<script src="{{asset('public/admin/assets/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
<script src="{{asset('public/admin/assets/vendor/charts/c3charts/C3chartjs.js')}}"></script>
<script src="{{asset('public/admin/assets/libs/js/dashboard-ecommerce.js')}}"></script>
</body>
</html>
