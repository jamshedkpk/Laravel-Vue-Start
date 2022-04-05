<!-- Start of header-->
@include("admin.layout.header")
<!-- End of header-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Start of navbar -->
@include("admin.layout.navbar")
  <!-- End of navbar -->

    <!-- Start of aside bar-->
@include("admin.layout.sidebar")
    <!-- End of aside bar-->

    <div class="content-wrapper">
    <!-- Start of contentheader -->
{{-- @include("admin.layout.contentheader") --}}
    <!-- End of contentheader -->

    <!-- Start of main content -->
        @yield('content')
        @yield('extra-js')
    <!-- End of main content -->

</div>
  <!-- /.content-wrapper -->

  <!-- Start of footer -->
    @include("admin.layout.footer")
  <!-- End of footer -->

</div>
