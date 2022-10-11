<li class="nav-item {{ Request::is('tags*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('tags.index') }}">
        <i class="nav-icon icon-tag tag-3x"></i>
        <span>Tags</span>
    </a>
</li>
<li class="nav-item {{ Request::is('banners*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('banners.index') }}">
       <i class="nav-icon icon-grid"></i>
        <span>Banners</span>
    </a>
</li>
<li class="nav-item {{ Request::is('categories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('categories.index') }}">
       <i class="nav-icon icon-grid"></i>
        <span>Categories</span>
    </a>
</li>
<li class="nav-item {{ Request::is('subCategories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('subCategories.index') }}">
        <i class="nav-icon icon-grid"></i>
        <span>Sub Categories</span>
    </a>
</li>
<li class="nav-item {{ Request::is('products*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('products.index') }}">
        <i class="nav-icon icon-grid"></i>
        <span>Products</span>
    </a>
</li>
{{-- <li class="nav-item {{ Request::is('productImages*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('productImages.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Product Images</span>
    </a>
</li> --}}

<li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('users.index') !!}">
        <i class="nav-icon icon-user"></i>
        <span>Users</span>
    </a>
</li>
<li class="nav-item {{ Request::is('orders*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('orders.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Orders</span>
    </a>
</li>
