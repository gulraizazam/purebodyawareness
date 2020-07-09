 <aside>

      <div id="sidebar" class="nav-collapse ">

        <!-- sidebar menu start-->

        <ul class="sidebar-menu">

          <li class="{{ (\Request::route()->getName() == 'admin.index') ? 'active' : '' }}">

            <a class="" href="{{url('dashboard')}}">

                <i class="icon_house_alt"></i>

                <span>Dashboard</span>

            </a>

          </li>
          <li class="{{ (\Request::route()->getName() == 'allpayments') ? 'active' : '' }}">

            <a class="" href="{{url('allpayments')}}">

                <i class="fa fa-clock-o"></i>

                <span>Transactions History</span>

            </a>

          </li>
          <li class="{{ (\Request::route()->getName() == 'allplans') ? 'active' : '' }}">
            <a class="" href="{{route('allplans')}}">
              <i class="icon_desktop"></i>
              <span>Plans</span>
              
            </a>
            
          </li>
          <li class="{{ (\Request::route()->getName() == 'graduate.all') ? 'active' : '' }}">
            <a class="" href="{{route('graduate.all')}}">
              <i class="fa fa-graduation-cap"></i>
              <span>Graduates</span>
              
            </a>
            
          </li>
          <li class="{{ (\Request::route()->getName() == 'banners.all') ? 'active' : '' }}">
            <a class="" href="{{route('banners.all')}}">
              <i class="fa fa-image"></i>
              <span>Banners</span>
              
            </a>
            
          </li>
          <li class="{{ (\Request::route()->getName() == 'content.all') ? 'active' : '' }}">
            <a class="" href="{{route('content.all')}}">
              <i class="fa fa-pencil-square-o"></i>
              <span>Training Plans</span>
              
            </a>
            
          </li>
           <li class="{{ (\Request::route()->getName() == 'testimonial.all') ? 'active' : '' }}">
            <a class="" href="{{route('testimonial.all')}}">
              <i class="fa fa-camera-retro"></i>
              <span>Testimonial Videos</span>
              
            </a>
            
          </li>
          <li class="sub-menu ">
            <a href="javascript:;" class="">
                <i class="fa fa-pencil-square-o"></i>
                    <span>Features</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="{{ (\Request::route()->getName() == 'features.all') ? 'active' : '' }}" href="{{route('features.all')}}">Index Page</a></li>
              <li><a class="" href="{{route('features.veggie')}}">Veggie Plan Page</a></li>
              
            </ul>
          </li>
           <li class="{{ (\Request::route()->getName() == 'socialcontacts') ? 'active' : '' }}">
            <a class="" href="{{route('socialcontacts')}}">
              <i class="fa fa-facebook"></i>
              <span>Social Contacts</span>
              
            </a>
            
          </li>
        <!-- sidebar menu end-->

      </div>

    </aside>

    <!--sidebar end-->