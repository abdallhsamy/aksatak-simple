<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item {{ Request::is('customers*') ? 'active' : '' }}">
    <a href="{{ route('customers.index') }}" class="nav-link {{ Request::is(route('customers.index')) ? 'active' : '' }}">
        <i class="fa fa-users"></i>
        <p>Customers</p>
    </a>
</li>
<li class="nav-item {{ Request::is('productCategories*') ? 'active' : '' }}">
    <a href="{{ route('productCategories.index') }}" class="nav-link {{ Request::is(route('productCategories.index')) ? 'active' : '' }}">
        <i class="fa fa-edit"></i>
        <p>Product Categories</p>
    </a>
</li>
