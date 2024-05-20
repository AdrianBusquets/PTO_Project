<nav
    class="nav d-flex"
>
    <a class="nav-link" href="{{route('welcome')}}" aria-current="page"
    ><h1><i class="fa-solid fa-dumbbell" style="position: absolute; font-size: 3rem; color:rgb(19, 19, 19); left: 0; top:0.5rem; z-index: -1;"></i>PTO</h1></a>
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
