<div class="sidebar" data-color="green" data-background-color="white" data-image="{{asset("vendor/material-dashboard/img/sidebar-1.jpg")}}">
    <div class="logo"><a href="#" class="simple-text logo-normal">Account Application</a></div>

    <div class="sidebar-wrapper">
        <ul class="nav">
            {{-- {!! dd(new \App\Service\Layouts\Menu()); !!} --}}

            {!! $menu->html !!}


        </ul>
    </div>
</div>
