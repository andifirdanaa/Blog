<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('paper') }}/img/logo-small.png">
            </div>
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            SMP BAHAGIA
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ $elementActive == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'dashboard') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            @if(Auth::user()->rolesDetail->name === 'admin')
            <li class="{{ $elementActive == 'user' || $elementActive == 'profile' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples">
                    <i class="nc-icon"><img src="{{ asset('paper/img/laravel.svg') }}"></i>
                    <p>
                            {{ __('User') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExamples">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'user' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'user') }}">
                                <span class="sidebar-mini-icon">{{ __('U') }}</span>
                                <span class="sidebar-normal">{{ __(' User Management ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- <li class="{{ $elementActive == 'posts' ? 'active' : '' }}">
                <a href="{{route('posts.index')}}">
                    <i class="nc-icon nc-box-2"></i>
                    <p>{{ __('Posts') }}</p>
                </a>
            </li> -->
             <li class="{{ $elementActive == 'posts' ? 'active' : '' }}">
                <a href="{{route('posts.index')}}">
                    <i class="nc-icon nc-box-2"></i>
                    <p>{{ __('Post') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'role' ? 'active' : '' }}">
                <a href="{{ route('role.index', 'role') }}">
                    <i class="nc-icon nc-box-2"></i>
                    <p>{{ __('Roles') }}</p>
                </a>
            </li>
            @endif
             <li class="{{ $elementActive == 'role' ? 'active' : '' }}">
                <a href="{{ route('materi.index', 'role') }}">
                    <i class="nc-icon nc-box-2"></i>
                    <p>{{ __('Materi') }}</p>
                </a>
            </li>
            
        </ul>
    </div>
</div>