<div>
    <header>
        <h1 class="h1">Blog de videojuegos</h1>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                    <a class="navbar-brand" href="{{route('home')}}">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{route('post.index')}}">Post</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Usuarios</a>
                    </li>
                  </ul>
                  <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
            </div>
        </nav>
    </header>
</div>
<!-- 
<ul>
                <li><a href="{{route('post.create')}}">Post</a></li>
                <li><a href="">Usuarios</a></li>
            </ul>
-->