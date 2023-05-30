@include('app.inc.header')

<body>
    <script src="./dist/js/demo-theme.min.js?1684106062"></script>
    <div class="page">
        <!-- Navbar -->
        @include('app.inc.menu')
        <div class="page-wrapper">
            <!-- Page body -->
            <div class="page-body">
                @yield('content')
            </div>
            @include('app.inc.footer')
        </div>
    </div>
    <script src="{{asset('assets/dist/js/tabler.min.js') }}" defer></script>
    <script src="{{asset('assets/dist/js/demo.min.js') }}" defer></script>
</body>

</html>
