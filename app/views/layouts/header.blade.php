
<!--header start-->
<header class="header black-bg">
      <div class="sidebar-toggle-box">
          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
    <!--logo start-->
    <a href="{{URL::to('/dashboard') }}" class="logo"><b>Blubuks Company</b></a>
    <!--logo end-->
    
    <div class="top-menu">
    	<ul class="nav pull-right top-menu">
            <li><a class="logout" href="{{ URL::to('logout') }}">Logout</a></li>
    	</ul>
    </div>
</header>
<!--header end-->