<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/subjects') }}"><i class="nav-icon icon-globe"></i> {{ trans('admin.subject.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/departments') }}"><i class="nav-icon icon-ghost"></i> {{ trans('admin.department.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/users') }}"><i class="nav-icon icon-energy"></i> Users</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/blog-categories') }}"><i class="nav-icon icon-energy"></i> Blog categories</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/blogs') }}"><i class="nav-icon icon-energy"></i> Blog</a></li>
         
         
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/roles') }}"><i class="nav-icon icon-energy"></i> {{ trans('admin.role.title') }}</a></li>

        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    @can('admin.Student')
         <li class="nav-item"><a class="nav-link" href="{{ url('admin/users') }}"><img src="{{url('images/sidebar/speedometer.png')}}" height="30px" width="30px"> <span>Affiliate Business</span></a>
         </li>
         <li class="nav-item"><a class="nav-link" href="{{ url('admin/departments') }}"><img src="{{url('images/sidebar/speedometer.png')}}" height="30px" width="30px"> <span>Affiliate Business</span></a>
         </li>

    @endcan

    @can('admin.Teacher')
         <li class="nav-item"><a class="nav-link" href="{{ url('admin/users') }}"><img src="{{url('images/sidebar/speedometer.png')}}" height="30px" width="30px"> <span>Affiliate Business</span></a>
         </li>
         <li class="nav-item"><a class="nav-link" href="{{ url('admin/departments') }}"><img src="{{url('images/sidebar/speedometer.png')}}" height="30px" width="30px"> <span>Affiliate Business</span></a>
         </li>

    @endcan

    @can('admin.admin')
         <li class="nav-item"><a class="nav-link" href="{{ url('admin/users') }}"><img src="{{url('images/sidebar/speedometer.png')}}" height="30px" width="30px"> <span>Affiliate Business</span></a>
         </li>
         <li class="nav-item"><a class="nav-link" href="{{ url('admin/departments') }}"><img src="{{url('images/sidebar/speedometer.png')}}" height="30px" width="30px"> <span>Affiliate Business</span></a>
         </li>
         <li class="nav-item"><a class="nav-link" href="{{ url('admin/subjects') }}"><img src="{{url('images/sidebar/speedometer.png')}}" height="30px" width="30px"> <span>Affiliate Business</span></a>
         </li>
         <li class="nav-item"><a class="nav-link" href="{{ url('admin/blog') }}"><img src="{{url('images/sidebar/speedometer.png')}}" height="30px" width="30px"> <span>Affiliate Business</span></a>
         </li>
    @endcan
</div>

