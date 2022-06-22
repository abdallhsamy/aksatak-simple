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
<li class="nav-item {{ Request::is('products*') ? 'active' : '' }}">
    <a href="{{ route('products.index') }}" class="nav-link {{ Request::is(route('products.index')) ? 'active' : '' }}">
        <i class="fa fa-edit"></i>
        <p>Products</p>
    </a>
</li>
<li class="nav-item {{ Request::is('sells*') ? 'active' : '' }}">
    <a href="{{ route('sells.index') }}" class="nav-link {{ Request::is(route('sells.index')) ? 'active' : '' }}">
        <i class="fa fa-edit"></i>
        <p>Sells</p>
    </a>
</li>
<li class="nav-item {{ Request::is('installments*') ? 'active' : '' }}">
    <a href="{{ route('installments.index') }}" class="nav-link {{ Request::is(route('installments.index')) ? 'active' : '' }}">
        <i class="fa fa-edit"></i>
        <p>Installments</p>
    </a>
</li>