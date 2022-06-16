<div class="wrapper">
      
      <header class="main-header">
        <a href="/admin" class="logo"><b>Admin</b>Panel</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">{{count($messages)}}</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have {{count($messages)}} messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      @foreach($messages as $msg)
                      <li><!-- start message -->
                        <a href="/admin/message/show/{{$msg->id}}">
                          <div class="pull-left">
                            <img src="{{asset('assets')}}/admin/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                          </div>
                          <h4>
                            {{$msg->name}}
                            <!-- <small><i class="fa fa-clock-o"></i> 5 mins</small> -->
                          </h4>
                          <p>{{$msg->subject}}</p>
                        </a>
                      </li><!-- end message -->
                      @endforeach
                    </ul>
                  </li>
                  <li class="footer"><a href="/admin/message">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-fw fa-comments-o"></i>
                  <span class="label label-warning">{{count($comments)}}</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have {{count($comments)}} comments</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                    @foreach($comments as $comment)
                      <li>
                        <a href="/admin/comment/show/{{$comment->id}}">
                          <i class="fa fa-users text-aqua"></i>{{App\Http\Controllers\AdminPanel\CommentConroller::getHomeTitle($comment->home_id)}}
                        </a>
                      </li>
                      @endforeach
                    </ul>
                  </li>
                  <li class="footer"><a href="/admin/comment">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  @if(Auth::user()->profile_photo_path==null)
                  <img src="{{asset('assets')}}/admin/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                  @else
                  <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" class="user-image" alt="User Image"/>
                  @endif
                  <span class="hidden-xs">{{Auth::user()->name}}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    @if(Auth::user()->profile_photo_path==null)
                      <img src="{{asset('assets')}}/admin/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    @else
                      <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" class="img-circle" alt="User Image" />
                    @endif
                    <p>
                      {{Auth::user()->name}}
                    </p>
                  </li>
                  <!-- Menu Body -->

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <!-- <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div> -->
                    <div class="pull-right">
                      <a href="/logoutuser" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
