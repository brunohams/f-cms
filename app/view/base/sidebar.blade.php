<div class="navbar-default sidebar" role="navigation">

    <div class="sidebar-nav navbar-collapse">

        <ul class="nav" id="side-menu">

            @foreach($menu as $item)

                <li>

                    {{--Verifica se menu tem filho--}}
                    @if (($item['filho']) == NULL)

                        <a href="{{$item['link']}}"><i class="fa {{$item['icone']}} fa-fw"></i>{{$item['nome']}}</a>

                    @else

                        <a href="{{$item['link']}}"><i class="fa {{$item['icone']}} fa-fw"></i>{{$item['nome']}}<span class="fa arrow"></span></a>

                        <ul class="nav nav-second-level collapse" aria-expanded="false">

                            {{-- Varre os menus filhos --}}
                            @foreach ($item['filho'] as $index => $filho)

                                <li>

                                    <a href="{{ $filho['link'] }}">{{ $filho['nome'] }}</a>

                                </li>

                            @endforeach

                        </ul>

                    @endif


                </li>

            @endforeach

        </ul>

    </div>

</div>