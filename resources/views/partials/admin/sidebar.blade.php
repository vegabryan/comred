    <aside class="main-sidebar">

      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
{{--         <div class="user-panel">
          <div class="pull-left image">
            <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Alexander Pierce</p> --}}
            <!-- Status -->
{{--             <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div> --}}

        <!-- search form (Optional) -->
{{--         <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form> --}}
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">@lang('Navitation Panel')</li>
          <!-- Optionally, you can add icons to the links -->
          <li class="{{ setActive('admin') }}"><a href="{{route('admin')}}"><i class="fa fa-tachometer"></i> <span>@lang('Dashboard')</span></a></li>
          <li class="{{ setActive('users.index') }}"><a href="{{route('users.index')}}"><i class="fa fa-user-plus"></i></i> <span>@lang('Users')</span></a></li>
          {{-- <li class="{{ setActive('') }}"><a href="#"><i class="fa fa-user"></i> <span>@lang('Personal')</span></a></li> --}}
          {{-- <li class="{{ setActive('') }}"><a href="#"><i class="fa fa-file"></i> <span>@lang('Reports')</span></a></li>
          <li class="{{ setActive('') }}"><a href="#"><i class="fa fa-clipboard"></i> <span>@lang('Justification')</span></a></li>
          <li class="{{ setActive('') }}"><a href="#"><i class="fa fa-users"></i> <span>@lang('Groups')</span></a></li> --}}
          {{-- <li class="treeview">
            <a href="#"><i class="fa fa-cog"></i></i> <span>@lang('Configuration')</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{ setActive('') }}"><a href="#">@lang('General Settings')</a></li>
              <li class="{{ setActive('') }}"><a href="#">@lang('Holy Day')</a></li>
            </ul>
          </li> --}}
         {{--  <li><a href="#"><i class="fa fa-link"></i> <span>@lang('System Logs')</span></a></li>
          <li class="{{ setActive('') }}"><a href="#"><i class="fa fa-question-circle"></i> <span>@lang('Help')</span></a></li> --}}


          {{-- <li class="treeview">
            <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#">Link in level 2</a></li>
              <li><a href="#">Link in level 2</a></li>
            </ul>
          </li> --}}
        </ul>
        <!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
    </aside>