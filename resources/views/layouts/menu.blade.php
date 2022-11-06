
<li class="nav-item">
    <a href="{{ route('categories.index') }}"
       class="nav-link {{ Request::is('categories*') ? 'active' : '' }}">
        <p>Categories</p>
    </a>
    
</li>

<li class="nav-item">
    <a href="{{ route('subCategories.index') }}"
       class="nav-link {{ Request::is('subCategories*') ? 'active' : '' }}">
        <p>@lang('models/subCategories.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('posts.index') }}"
       class="nav-link {{ Request::is('posts*') ? 'active' : '' }}">
        <p>@lang('models/posts.plural')</p>
    </a>
</li>

