<section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">LAPORAN</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="{{route('admin')}}"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li><a href="{{route('customer')}}"><i class="fa fa-link"></i> <span>Customer</span></a></li>
        <li><a href="{{route('member')}}"><i class="fa fa-link"></i> <span>Membership</span></a></li>
        <li><a href="{{route('pegawai')}}"><i class="fa fa-link"></i> <span>Pegawai</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Laporan Apa Ini</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('pegawai')}}">Pegawai</a></li>
            <li><a href="#">Pengeluaran</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>