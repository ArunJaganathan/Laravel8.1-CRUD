<!-- <li class="nav-item">
    <a href="{{ route('$SCHEMAFILES.index') }}"
       class="nav-link {{ Request::is('$SCHEMAFILES*') ? 'active' : '' }}">
        <p>$ S C H E M A  F I L E S</p>
    </a>
</li>

 -->



<li class="nav-item">
    <a href="{{ route('categories.index') }}"
       class="nav-link {{ Request::is('categories*') ? 'active' : '' }}">
        <p>Categories</p>
    </a>
    <ul>
      <li class="nav-item">
        <a href="{{ route('subCategories.index') }}"
           class="nav-link {{ Request::is('subCategories*') ? 'active' : '' }}">
            <p>Sub Categories</p>
        </a>
      </li>
    </ul>
</li>







<li class="nav-item">
    <a href="{{ route('tests.index') }}"
       class="nav-link {{ Request::is('tests*') ? 'active' : '' }}">
        <p>Tests</p>
    </a>
    <ul>
      <li class="nav-item">
        <a href="{{ route('posts.index') }}"
           class="nav-link {{ Request::is('posts*') ? 'active' : '' }}">
            <p>Posts</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('posts.index') }}"
           class="nav-link {{ Request::is('posts2*') ? 'active' : '' }}">
            <p>Posts2</p>
        </a>
      </li>
    </ul>
</li>





