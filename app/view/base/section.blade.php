@include('base/header')

{{--Se for a página de login--}}
@if(!$exibeMenu)

    <div id="page-wrapper">

        @yield('content')

    </div>

@else

    @yield('content')

@endif


@include('base/footer')