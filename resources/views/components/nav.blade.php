<nav
    class="nav d-flex"
>
    <h1>PTO</h1>
    <div class="linkNav">

        <a class="nav-link" href="{{route('welcome')}}" aria-current="page"
            >Home</a
        >
        <div class="dropdown">
            <a href="#" class="dropbtn">Servicios</a>
            <div class="dropdown-content">
              <a href="{{route('rutinas')}}">Rutinas</a>
              <a href="{{route('nutricion')}}">Nutrición</a>
            </div>
          </div>
        <a class="nav-link" href="#">IMC</a>
    </div>
</nav>
