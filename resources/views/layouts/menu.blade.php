<!-- https://www.itsolutionstuff.com/post/laravel-8-user-roles-and-permissions-tutorialexample.html -->

@guest

<li class="nav-header">Admin Access only</li>



@else



@endguest






<li class="nav-item">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-chart-pie"></i>
    <p>
      Calalog
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{ route('categories.index') }}"
         class="nav-link {{ Request::is('categories*') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i><p>Categories</p>
      </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('subCategories.index') }}"
           class="nav-link {{ Request::is('subCategories*') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i><p>@lang('models/subCategories.plural')</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('products.index') }}"
           class="nav-link {{ Request::is('posts*') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i><p>products</p>
        </a>
    </li>
    
    
  </ul>
</li>
<li class="nav-item">
  <a href="{{ route('pictures.index') }}"
     class="nav-link {{ Request::is('pictures*') ? 'active' : '' }}">
      <p>@lang('models/pictures.plural')</p>
  </a>
</li>
<li class="nav-item">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-circle"></i>
    <p>
      Coupon 
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
        <a href="{{ route('couponCodes.index') }}"
           class="nav-link {{ Request::is('posts*') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i><p>Generate Coupon</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('coupons.index') }}"
           class="nav-link {{ Request::is('coupons*') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i><p>@lang('models/coupons.plural')</p>
        </a>
    </li>
    
    
  </ul>
</li>


<!-- ************************ -->

<li class="nav-header">Role & Permissions</li>

<li class="nav-item">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-circle"></i>
    <p>
      Role & Permissions
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{ route('users.index') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Users</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('roles.index') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Role</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>
          Level 3
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-dot-circle nav-icon"></i>
            <p>Level 31</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-dot-circle nav-icon"></i>
            <p>Level 32</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-dot-circle nav-icon"></i>
            <p>Level 33</p>
          </a>
        </li>
      </ul>
    </li>
    
  </ul>




<li class="nav-item">
    <a href="{{ route('employees.index') }}"
       class="nav-link {{ Request::is('employees*') ? 'active' : '' }}">
        <p>@lang('models/employees.plural')</p>
    </a>
</li>

