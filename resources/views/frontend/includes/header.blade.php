<div class="container-fluid bg-white sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
            <a href="{{route('home')}}" class="navbar-brand">
                <img class="img-fluid" src="{{asset('/')}}frontend-assets/img/logo.png" alt="Logo">
            </a>
            <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Teas Categories</a>
                        <div class="dropdown-menu bg-light rounded-0 m-0">
                            @foreach ($categories as $category)
                                <a href="feature.html" class="dropdown-item">{{$category->name}}</a>
                            @endforeach
                        </div>
                    </div>
                    <a href="store.html" class="nav-item nav-link">Store</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="border-start ps-4 d-none d-lg-block">
                    <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </nav>
    </div>
</div>