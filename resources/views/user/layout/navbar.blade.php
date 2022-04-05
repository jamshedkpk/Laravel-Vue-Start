<header class="header-area">
<div class="container">
<div class="row">
<div class="col-lg-12">
<nav class="navbar navbar-expand-lg">
<a class="navbar-brand" href="index.html">
<img src="{{ asset('user_template/assets/images/logo.png') }}" alt="Logo">
</a> <!-- Logo -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="bar-icon"></span>
<span class="bar-icon"></span>
<span class="bar-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul id="nav" class="navbar-nav ml-auto">
<li class="nav-item">
<a data-scroll-nav="0" href="#product">Products</a>
</li>
<li class="nav-item">
<a data-scroll-nav="0" href="#service">Services</a>
</li>
<li class="nav-item">
<a data-scroll-nav="0" href="#showcase">Portfolio</a>
</li>
<li class="nav-item">
<a data-scroll-nav="0" href="#team">Team</a>
</li>
<li class="nav-item">
<a data-scroll-nav="0" href="#blog">Blog</a>
</li>
<li class="nav-item">
<a data-scroll-nav="0" href="#contact">Contact</a>
</li>
@if(Route::has('login'))
@auth
<li class="nav-item active">
<a data-scroll-nav="0" href="#home">Cart</a>
</li>
<li class="nav-item active">
<div class="dropdown">
<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
Profile Setting
</button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<a class="dropdown-item" href="#">Profile</a>
<a class="dropdown-item" href="#">Change Password</a>
<form method="post" action="{{ route('logout') }}">
@csrf
<button class="btn btn-link">Logout</button>
</form>
</div>
</div>
</li>
@else
<li class="nav-item {{request()->is('login')? 'active':'' }}">
<a  href="{{ route('login') }}">SignIn</a>
</li>
@if(Route::has('register'))
<li class="nav-item {{request()->is('register')?'active':''}}">
<a  href="{{ route('register') }}">Register</a>
</li>
@endif
@endauth
@endif

</ul> <!-- navbar nav -->
</div>
</nav> <!-- navbar -->
</div>
</div> <!-- row -->
</div> <!-- container -->
</header>
