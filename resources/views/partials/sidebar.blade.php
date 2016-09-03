@inject('request', 'Illuminate\Http\Request')
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu"
            data-keep-expanded="false"
            data-auto-scroll="true"
            data-slide-speed="200">
            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li class="{{ $request->segment(1) == 'materials' ? 'active' : '' }}">
                <a href="{{ route('materials.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">Materials</span>
                </a>
            </li>
            <li class="{{ $request->segment(1) == 'reports' ? 'active' : '' }}">
                <a href="{{ route('reports.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">Reports</span>
                </a>
            </li>            
            

            <li>
                <a href="{{ url('/logout') }}">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>
