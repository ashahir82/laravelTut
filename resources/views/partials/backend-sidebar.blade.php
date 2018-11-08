<!-- Admin ministry -->
@if (Auth::user()->access_power >= 1000)
    <!-- User & Above -->
    <li class="navigation-header"><span>Module</span> <i class="icon-menu" title="Main pages"></i></li>
    <li @if (Request::segment(2) == 'dashboard') class="active" @endif><a href="/admin/dashboard"><i class="icon-home4"></i> <span>Dashboard</span></a></li>  {{--  DONE --}}
    <li @if (Request::segment(2) == 'course') class="active" @endif><a href="/admin/course"><i class="icon-grid"></i> <span>Course</span></a>
        <ul>
            <li><a href="/admin/course/create">Create New Course</a></li>
            <li><a href="/admin/course">All Courses</a></li>
        </ul>
    </li> {{--  DONE --}}
    <li @if (Request::segment(2) == 'session') class="active" @endif><a href="/admin/session"><i class="icon-laptop"></i> <span>Session</span></a>
        <ul>
            <li><a href="/admin/session/create">Create New (Course) Session</a></li>
            <li><a href="/admin/session">All Sessions</a></li>
        </ul>
    </li> {{--  DONE --}}
    <li @if (Request::segment(2) == 'monthlyreport') class="active" @endif>
        <a href="/admin/monthlyreport"><i class="icon-checkmark-circle"></i> <span>Monthly Report</span></a>
        <ul>
            <li><a href="/admin/monthlyreport/create">Create New Monthly Report</a></li>
            <li><a href="/admin/monthlyreport">All Reports</a></li>
            <li><a href="/admin/monthlyreport/upload">New Upload</a></li>
        </ul>
    </li>
    <!-- /user and above -->
    <!-- Reporting -->
    <li @if (Request::segment(2) == 'report') class="active" @endif>
        <a href="#"><i class="icon-statistics"></i> <span>Dashboard Reporting</span></a>
        <ul>
            <li><a href="/admin/report/statistik">Statistic</a></li>
            <li><a href="/admin/report/chart">Chart</a></li>
        </ul>
    </li>
    <!-- /reporting -->

@endif
@if (Auth::user()->access_power >= 3000)
    <li class="navigation-header"><span>ADMIN MINISTRY</span> <i class="icon-menu" title="Main pages"></i></li>
    <li @if (Request::segment(2) == 'activity') class="active" @endif><a href="/admin/activity"><i class="icon-stack-text"></i> <span>Activity</span></a>
        <ul>
            <li><a href="/admin/activity/create">Create New Activity</a></li>
            <li><a href="/admin/activity">All Activity</a></li>
        </ul>
    </li> {{--  DONE --}}
    <li @if (Request::segment(2) == 'gallery') class="active" @endif><a href="/admin/gallery"><i class="note-icon-frame"></i> <span>Photo Gallery</span></a>
        <ul>
            <li><a href="/admin/gallery/create">Create New Photo</a></li>
            <li><a href="/admin/gallery">All Photos</a></li>
        </ul>
    </li> {{--  DONE --}}
    <li @if (Request::segment(2) == 'target') class="active" @endif>
        <a href="#"><i class="icon-target2"></i> <span>Target</span></a>
        <ul>
            <li><a href="/admin/target/create">Create New Target</a></li>
            <li><a href="/admin/target">All Targets</a></li>
        </ul>
    </li>
    <li @if (Request::segment(2) == 'visit') class="active" @endif>
        <a href="#"><i class="icon-notebook"></i> <span>Visit</span></a>
        <ul>
            <li><a href="/admin/visit/create">Create New Visit</a></li>
            <li><a href="/admin/visit">All Visits</a></li>
        </ul>
    </li>
@endif
<!-- /admin ministry only -->

<!-- /admin ministry only -->


<!-- Admin Only -->
@if (Auth::user()->access_power >= 3000)
    <li class="navigation-header"><span>ADMIN</span> <i class="icon-menu" title="Main pages"></i></li>
    <li @if (Request::segment(2) == 'contact-us') class="active" @endif><a href="/admin/contact-us">
            <i class="icon-help"></i> <span>Contact Uus</span></a>
    </li>
    <!--<li @if (Request::segment(2) == 'faq') class="active" @endif><a href="/admin/faq">
            <i class="icon-book"></i> <span>Faq</span></a></li>-->
    <li @if (Request::segment(2) == 'slider') class="active" @endif><a href="/admin/slider"><i class="icon-camera"></i> <span>Slider</span></a>
        <ul>
            <li><a href="/admin/slider/create">Create New Slider</a></li>
            <li><a href="/admin/slider">All Sliders</a></li>
        </ul>
    </li> {{--  DONE --}}



@endif
<!-- /admin only -->

<!-- examiner Only -->
@if ((Auth::user()->access_power == 200 || Auth::user()->access_power >= 5000 ) || Auth::user()->role == 'super_admin')
    <li class="navigation-header"><span>Psychometric Result</span> <i class="icon-menu" title="Main pages"></i></li>
    <li @if (Request::segment(3) == 'pdf') class="active" @endif>
        <a href="#"><i class="icon-file-pdf"></i> <span>Upload PDF Result</span></a>
        <ul>
            <li @if (Request::segment(3) == 'pdf') class="active" @endif><a href="/admin/psychometric/pdf/create">
                    <span>New Upload</span></a></li>
            <li @if (Request::segment(3) == 'pdf') class="active" @endif><a href="/admin/psychometric/pdf">
                    <span>All Uploads</span></a></li>
        </ul>
    </li>
    <li @if (Request::segment(3) == 'upload-excel') class="active" @endif><a href="/admin/psychometric/upload-excel">
            <i class="icon-file-excel"></i> <span>Upload Excel Result</span></a></li>
    <li @if (Request::segment(3) == 'form') class="active" @endif>
        <a href="#"><i class="icon-file-empty"></i> <span>Psychometric Form</span></a>
        <ul>
            <li @if (Request::segment(3) == 'form') class="active" @endif><a href="/admin/psychometric/form/create">
                    <span>Create</span></a></li>
            <li @if (Request::segment(3) == 'form') class="active" @endif><a href="/admin/psychometric/form">
                    <span>All Result</span></a></li>
        </ul>
    </li>

@endif

<!-- /admin only -->

{{-- Super Admin Only --}}
{{--@if (Auth::user()->role == 'super_admin')--}}
    <li class="navigation-header"><span>SUPER ADMIN</span> <i class="icon-menu" title="Main pages"></i></li>
    <li @if (Request::segment(2) == 'user') class="active" @endif>
        <a href="#"><i class="icon-users"></i> <span>User Management</span></a>
        <ul>
            <li><a href="/user/create">Create New User</a></li>
            <li><a href="/admin/user">All Users</a></li>
        </ul>
    </li>
    <li @if (Request::segment(2) == 'audit-trail') class="active" @endif><a href="/admin/audit-trail">
            <i class="icon-list"></i> <span>Audit Trail</span></a></li>
    <li @if (Request::segment(2) == 'lookups') class="active" @endif>
        <a href="#"><i class="icon-hammer-wrench"></i> <span>Lookups Management</span></a>
        <ul>
            <li><a href="/admin/lookups/ministry">Ministry</a></li>
            <li><a href="/admin/lookups/department">Department</a></li>
            <li><a href="/admin/lookups/agency">Agency</a></li>
            <li><a href="/admin/lookups/role">Role</a></li>
            <li><a href="/admin/lookups/field">Field</a></li>
            <li><a href="/admin/lookups/state">State</a></li>
            <!--<li><a href="/admin/lookups/audience">Audience</a></li>
            <li><a href="/admin/lookups/category">Category</a></li>-->
        </ul>

{{--@endif--}}
{{-- End Super Admin--}}