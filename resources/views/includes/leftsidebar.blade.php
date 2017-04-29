<div class="sidebar-inner slimscrollleft">
    <div class="user-details">
        <div class="pull-left">
            <img src="{{ URL::asset('images/users/avatar-1.jpg') }}" alt="" class="thumb-md img-circle">
        </div>
        <div class="user-info">
            <div class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Auditor <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                    <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                    <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>
                </ul>
            </div>

            <p class="text-muted m-0">Auditor I</p>
        </div>
    </div>
    <!--- Divider -->
    <div id="sidebar-menu">
        <ul>
            <li>
                <a href="{{ action('HomeController@index') }}" class="waves-effect {{ Request::segment(2) === null ? 'active' : null }}"><i class="md md-home"></i><span> Dashboard </span></a>
            </li>
            <li>
                <a href="{{ action('PerusahaanController@index') }}" class="waves-effect {{ Request::segment(2) === 'perusahaan' ? 'active' : null }}"><i class="fa fa-folder-open"></i><span> Collection </span></a>
            </li>

            <li>
                <a href="{{ action('Proses_AuditController@index') }}" class="waves-effect {{ Request::segment(2) === 'proses_audit' ? 'active' : null }}"><i class="fa fa-th-list"></i><span> Audit Process </span></a>
            </li>
            <li>
                <a href="{{ action('EvidanceController@index') }}" class="waves-effect {{ Request::segment(2) === 'evidance' ? 'active' : null }}"><i class="fa fa-upload"></i><span> Evidance </span></a>
            </li>
            <li>
                <a href="{{ action('ReportController@index') }}" class="waves-effect {{ Request::segment(2) === 'laporan' ? 'active' : null }}"><i class="fa fa-newspaper-o"></i><span> Report </span></a>
            </li>
            <!-- <li class="has_sub">
                <a href="#" class="waves-effect"><i class="fa fa-folder-open"></i><span> Karya </span><span class="pull-right"><i class="md md-add"></i></span></a>
                <ul class="list-unstyled">
                    <li class="{{ Request::segment(2) === 'pks_art' ? 'active' : null }}">
                        <a href="" class="waves-effect {{ Request::segment(2) === 'pks_art' ? 'active' : null }}"><i class="md md-palette"></i><span> PKS Art </span></a>
                    </li>
                    <li class="{{ Request::segment(2) === 'pks_tv' ? 'active' : null }}">
                        <a href="" class="waves-effect {{ Request::segment(2) === 'pks_tv' ? 'active' : null }}"><i class="fa fa-video-camera"></i><span> PKS TV </span></a>
                    </li>
                    <li class="{{ Request::segment(2) === 'literasi' ? 'active' : null }}">
                        <a href="" class="waves-effect {{ Request::segment(2) === 'literasi' ? 'active' : null }}"><i class="fa fa-file-text-o"></i><span> LITERASI </span></a>
                    </li>
                    <li class="{{ Request::segment(2) === 'pks_foto' ? 'active' : null }}">
                        <a href="" class="waves-effect {{ Request::segment(2) === 'pks_foto' ? 'active' : null }}"><i class="fa fa-camera"></i><span> PKS FOTO </span></a>
                    </li>
                </ul>
            </li> -->
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
