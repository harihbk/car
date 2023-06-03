<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link ">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>



<li class="nav-item">
    <a href="{{ route('producttypes.index') }}"
       class="nav-link {{ Request::is('producttypes*') ? 'active' : '' }}">
        <p>Product Type</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('pvalues.index') }}"
       class="nav-link {{ Request::is('pvalues*') ? 'active' : '' }}">
        <p>Product Values</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('cars.index') }}"
       class="nav-link {{ Request::is('cars*') ? 'active' : '' }}">
        <p>Cars</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('carimages.index') }}"
       class="nav-link {{ Request::is('carimages*') ? 'active' : '' }}">
        <p>Carimages</p>
    </a>
</li>


