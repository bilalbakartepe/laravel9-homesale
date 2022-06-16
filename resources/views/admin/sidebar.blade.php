<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">

              @if(Auth::user()->profile_photo_path==null)
              <img src="{{asset('assets')}}/admin/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
              
              @else
              <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" class="img-circle" alt="User Image" />
              @endif
            </div>
            <div class="pull-left info">
              <p>{{Auth::user()->name}}</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div> 
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="/admin">
                <i class="fa fa-fw fa-circle-o"></i> <span>Home</span>
              </a>
            </li>
            
            <li>
              <a href="/admin/category">
                <i class="fa fa-fw fa-list-alt"></i>
                <span>Categories</span>
              </a>
 
            </li>

            <li>
              <a href="/admin/house">
                <i class="fa fa-fw fa-home"></i>
                <span>Houses</span>
              </a>
 
            </li>



            <li>
              <a href="/admin/message">
                <i class="fa fa-envelope"></i>
                <span>Messages</span>
              </a>
 
            </li>
            <li>
              <a href="/admin/comment">
                <i class="fa fa-fw fa-comments-o"></i> <span>Comments</span>
              </a> 
            </li>            
            <li>
              <a href="/admin/user">
                <i class="fa fa-fw fa-users"></i>
                <span>Users</span>
              
              </a>
              
            </li>            
            <li>
              <a href="/admin/faq">
                <i class="fa fa-fw fa-question"></i> <span>FAQ</span>
              </a>
              
            </li>
            <li class="header"><span>Settings</span></li>
            <li>
              <a href="/admin/setting">
                <i class="fa fa-gear"></i>
                <span>Settings</span>
                
              </a>
              
            </li>

        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- =============================================== -->

      <!-- Right side column. Contains the navbar and content of the page -->
      