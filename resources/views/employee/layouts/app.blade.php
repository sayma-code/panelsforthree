<!DOCTYPE html>
<html lang="en">
@include('components.employee.header')
    
<body class="g-sidenav-show  bg-gray-200">
    @include('components.employee.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include('components.employee.navbar')
    <div class="container-fluid py-4">
        @yield('content')
    </div>
    </main>
<script src="{{ asset('backend/assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugins/chartjs.min.js') }}"></script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('backend/assets/js/material-dashboard.min.js?v=3.0.2') }}"></script>
</body>
</html>
