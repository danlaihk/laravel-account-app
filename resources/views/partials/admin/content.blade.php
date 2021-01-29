<!-- Content Wrapper. Contains page content -->

<div class="content">
    <div class="container-fluid">

    {{-- content --}}
    @stack('content_start')

    @yield('content')

    @stack('content_end')

    {{-- content end --}}

    </div>
</div>
