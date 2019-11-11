<!doctype html>
<html class="no-js" lang="en">
<head>
    @include('layouts.head')
</head>
<body>
    <!-- BEGIN::Wrapper Utama -->
    <div class="wrapper">

        <!-- BEGIN::Header -->
        @include('layouts.header')
        <!-- END::Header -->

        <!-- BEGIN::Halaman -->
        <div class="page-wrap">

            <!-- BEGIN::Menu Utama -->
            @include('layouts.sidebar')
            <!-- BEGIN::Menu Utama -->

            <!-- BEGIN::Konten Utama -->
            @yield('konten')
            <!-- END::Konten Utama -->

            <!-- BEGIN::Footer -->
            @include('layouts.footer')
            <!-- END::Footer -->
            
        </div>
        <!-- END::Halaman -->

    </div>
    <!-- END::Wrapper Utama -->

    @include('layouts.javascript')

</body>
</html>