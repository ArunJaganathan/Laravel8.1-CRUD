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
                  <a href="{{ route('posts.index') }}"
                     class="nav-link {{ Request::is('posts*') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i><p>@lang('models/posts.plural')</p>
                  </a>
              </li>
              
            </ul>
          </li>



          <li class="nav-header">MULTI LEVEL EXAMPLE</li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Level 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
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
          </li>
         
          <li class="nav-item">
    <a href="{{ route('pictures.index') }}"
       class="nav-link {{ Request::is('pictures*') ? 'active' : '' }}">
        <p>@lang('models/pictures.plural')</p>
    </a>
</li>

