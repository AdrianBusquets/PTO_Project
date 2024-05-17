<nav
    class="nav d-flex"
>
    <a class="nav-link" href="{{route('welcome')}}" aria-current="page"
    ><h1><i class="fa-solid fa-dumbbell"></i>PTO</h1></a>
    <div class="linkNav">

        
        <div class="dropdown">
            <a href="#" class="dropbtn">Servicios</a>
            <div class="dropdown-content">
              <a href="{{route('rutinas')}}">Rutinas</a>
              <a href="{{route('nutricion')}}">Nutrición</a>
            </div>
          </div>
        <a class="nav-link" href="{{route('imc')}}">IMC</a>
    </div>
</nav>
