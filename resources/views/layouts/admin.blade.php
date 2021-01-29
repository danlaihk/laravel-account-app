<!DOCTYPE html>
<html {{app()->getLocale()}}>
    @include('partials.admin.head')
    <body class="">
        <div class="wrapper ">

            @include('partials.admin.menu')
            <div class="main-panel">
                @include('partials.admin.navbar')

                @include('partials.admin.content')


                @include('partials.admin.footer')


            </div>
        </div>

        @include('partials.admin.fixed-plugin')
        @include('partials.admin.end-script')
    </body>
</html>
