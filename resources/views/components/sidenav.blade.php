<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla Lite</a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="{{asset('dist/img/avatar/avatar-1.jpeg')}}">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name">{{ Auth::user()->name}}</div>
              <div class="user-role">
                Administrator
              </div>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="active">
              <a href="{{ route('home') }}"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">Roles and Permissions</li>
            <li>
              <a href="#" class="has-dropdown"><i class="ion ion-ios-albums-outline"></i><span>Roles & Permissions</span></a>
              <ul class="menu-dropdown">
                <li><a href="{{route('roles.index')}}"><i class="ion ion-ios-circle-outline"></i> Roles</a></li>
                <li><a href="{{route('users.index')}}"><i class="ion ion-ios-circle-outline"></i> Users</a></li>
                {{-- <li><a href="{{route('courses.index')}}"><i class="ion ion-ios-circle-outline"></i> Courses</a></li> --}}
                {{-- <li><a href="{{route('create')}}"><i class="ion ion-ios-circle-outline"></i> Course</a></li> --}}
              </ul>
            </li>
            <li>
              {{-- <a href="#" class="has-dropdown"><i class="ion ion-flag"></i><span>Icons</span></a> --}}
              <a href="#" class="has-dropdown"><i class="ion ion-person"></i><span>Course</span></a>
              <ul class="menu-dropdown">
                <li><a href="{{route('course.index')}}"><i class="ion ion-ios-circle-outline"></i> Course</a></li>
                <li><a href="fontawesome.html"><i class="ion ion-ios-circle-outline"></i> Font Awesome</a></li>
                <li><a href="flag.html"><i class="ion ion-ios-circle-outline"></i> Flag</a></li>
              </ul>
            </li>
            <li>
              {{-- <a href="#" class="has-dropdown"><i class="ion ion-flag"></i><span>Icons</span></a> --}}
              <a href="#" class="has-dropdown"><i class="ion ion-person"></i><span>Content</span></a>
              <ul class="menu-dropdown">
                <li><a href="{{route('content.index')}}"><i class="ion ion-ios-circle-outline"></i> Content</a></li>
                <li><a href="fontawesome.html"><i class="ion ion-ios-circle-outline"></i> Font Awesome</a></li>
                <li><a href="flag.html"><i class="ion ion-ios-circle-outline"></i> Flag</a></li>
              </ul>
            </li>
            <li>
              {{-- <a href="#" class="has-dropdown"><i class="ion ion-flag"></i><span>Icons</span></a> --}}
              <a href="#" class="has-dropdown"><i class="ion ion-person"></i><span>Learner</span></a>
              <ul class="menu-dropdown">
                <li><a href="{{route('learner.index')}}"><i class="ion ion-ios-circle-outline"></i> Learner</a></li>
                <li><a href="fontawesome.html"><i class="ion ion-ios-circle-outline"></i> Font Awesome</a></li>
                <li><a href="flag.html"><i class="ion ion-ios-circle-outline"></i> Flag</a></li>
              </ul>
            </li>
            <li>
              <a href="table.html"><i class="ion ion-clipboard"></i><span>Tables</span></a>
            </li>
            <li>
              <a href="chartjs.html"><i class="ion ion-stats-bars"></i><span>Chart.js</span></a>
            </li>
            <li>
              <a href="simple.html"><i class="ion ion-ios-location-outline"></i><span>Google Maps</span></a>
            </li>
            <li>
              <a href="#" class="has-dropdown"><i class="ion ion-ios-copy-outline"></i><span>Examples</span></a>
              <ul class="menu-dropdown">
                <li><a href="login.html"><i class="ion ion-ios-circle-outline"></i> Login</a></li>
                <li><a href="register.html"><i class="ion ion-ios-circle-outline"></i> Register</a></li>
                <li><a href="forgot.html"><i class="ion ion-ios-circle-outline"></i> Forgot Password</a></li>
                <li><a href="reset.html"><i class="ion ion-ios-circle-outline"></i> Reset Password</a></li>
                <li><a href="404.html"><i class="ion ion-ios-circle-outline"></i> 404</a></li>
              </ul>
            </li>

            <li class="menu-header">More</li>
            <li>
              <a href="#" class="has-dropdown"><i class="ion ion-ios-nutrition"></i> Click Me</a>
              <ul class="menu-dropdown">
                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Menu 1</a></li>
                <li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i> Menu 2</a>
                  <ul class="menu-dropdown">
                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 1</a></li>
                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 2</a></li>
                    <li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i> Child Menu 3</a>
                      <ul class="menu-dropdown">
                        <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 1</a></li>
                        <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 2</a></li>
                        <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 3</a></li>
                      </ul>
                    </li>
                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 4</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="ion ion-heart"></i> Badges <div class="badge badge-primary">10</div></a>
            </li>
            <li>
              <a href="credits.html"><i class="ion ion-ios-information-outline"></i> Credits</a>
            </li>          </ul>
          <div class="p-3 mt-4 mb-4">
            <a href="http://stisla.multinity.com/" class="btn btn-danger btn-shadow btn-round has-icon has-icon-nofloat btn-block">
              <i class="ion ion-help-buoy"></i> <div>Go PRO!</div>
            </a>
          </div>
        </aside>
      </div>