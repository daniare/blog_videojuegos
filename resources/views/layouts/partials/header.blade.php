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
                      <a class="nav-link active" aria-current="page" href="{{route('usuario.index')}}">Usuario</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{route('categoria.index')}}">Categoria</a>
                    </li>
                    <!--Menu de usuario-->
                  <li class="nav-item"  style="margin-left: 80vw;">
                    <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle float-right" onclick="mostrarMenu()"  type="button" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="userMenu" id="menu" style="display: none; top: 10vh;">

                        @if (!Auth::user())
                        <li><a class="dropdown-item" href="{{route('usuario.registrar')}}">Registrar</a></li>
                        <li><a class="dropdown-item" href="{{route('usuario.login')}}">Login</a></li>  
                        @else
                        <li><a class="dropdown-item" href="#">Perfil</a></li>
                        <li><a class="dropdown-item" href="{{route('perfil.posts')}}">Mis posts</a></li>
                        <li><a class="dropdown-item" href="{{route('usuario.logout')}}">Logout</a></li>
                        @endif
                      </ul>
                  
                    </div>
                  </li>
                  <!--Menu de usuario-->
                  </ul>
            </div>
        </nav>
    </header>
</div>
<script>
  const btn=document.getElementById("userMenu");
  const menu=document.getElementById("menu");

  function mostrarMenu(){
    if(menu.style.display=="none"){
      menu.style.display="block";
    }else{
      menu.style.display="none";
    }
    
  }
</script>
