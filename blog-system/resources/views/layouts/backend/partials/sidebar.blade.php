<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{ asset('assets/backend/images/user.png') }}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
            <div class="email">{{ Auth::user()->email }}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         <i class="material-icons">input</i>Sign Out
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            {{-- Admin Menu --}}
            <li class="header">MAIN NAVIGATION</li>
            @if (Request::is('admin*'))
                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>    
                </li>
                <li class="{{ Request::is('admin/tag*') ? 'active' : '' }}">
                    <a href="{{ route('admin.tag.index') }}">
                    <i class="material-icons">label</i>
                        <span>Tag</span>
                    </a>    
                </li>
            <li class="header">System</li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 <i class="material-icons">input</i>
                 <span>Logout</span>
                </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                   @csrf
                </form>
            </li>


            @endif
            {{-- Author Menu --}}
            @if (Request::is('author*'))
            <li class="{{ Request::is('author/dashboard') ? 'active' : '' }}">
                <a href="{{ route('author.dashboard') }}">
                <i class="material-icons">dashboard</i>
                    <span>Dashboard</span>
                </a>    
            </li>

            <li class="header">System</li>

            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 <i class="material-icons">input</i>
                 <span>Logout</span>
                </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                   @csrf
                </form>
            </li>
            @endif
        </ul>
    </div>
    <!-- #Menu -->

</aside>
