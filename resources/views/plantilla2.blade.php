<ul
    class="nav nav-tabs"
    id="navId"
    role="tablist"
>
<li class="nav-item dropdown">
    <a
        class="nav-link dropdown-toggle"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="true"
        aria-expanded="false"
        >Catalogos
    </a>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="/periodos.index">Periodos</a>
        <a class="dropdown-item" href="/plazas.index">Plazas</a>
        <a class="dropdown-item" href="/puestos.index">Puestos</a>
        <a class="dropdown-item" href="">Personal</a>
        <a class="dropdown-item" href="/deptos.index">Deptos</a>
        <a class="dropdown-item" href="/carreras.index">Carreras</a>
        <a class="dropdown-item" href="/reticulas.index">Reticulas</a>
        <a class="dropdown-item" href="materias.index">Materias</a>
        <a class="dropdown-item" href="/alumnos.index">Alumnos</a>
        
    </div>
</li>
<li class="nav-item dropdown">
    <a
        class="nav-link dropdown-toggle"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="true"
        aria-expanded="false"
        >Horarios</a
    >
    <div class="dropdown-menu">
        <div class="d-flex flex-row">
            <a class="dropdown-item" href="#">Docentes</a>
            <a class="dropdown-item" href="#">Alumnos</a>
        </div>
</li>
    </li>
    <li class="nav-item dropdown">
        <a
            class="nav-link dropdown-toggle"
            data-bs-toggle="dropdown"
            href="#"
            role="button"
            aria-haspopup="true"
            aria-expanded="false"
            >Proyectos individuales</a
        >
        <div class="dropdown-menu">
            <div class="d-flex flex-row">
                <a class="dropdown-item" href="#">Capacitacion</a>
                <a class="dropdown-item" href="#">Asesorias Doc.</a>
                <a class="dropdown-item" href="#">Proyectos</a>
                <a class="dropdown-item" href="#">Material didactico</a>
                <a class="dropdown-item" href="#">Docencia e Inv</a>
                <a class="dropdown-item" href="#">Asesoria Proyectos Ext.</a>
                <a class="dropdown-item" href="#">Asesoria a S,S.</a>

            </div>
    </li>

    <li class="nav-item" role="presentation">
        <a href="#tab5Id" class="nav-link" data-bs-toggle="tab"
            >Instrumentacion</a
        >
    </li>
    <li class="nav-item" role="presentation">
        <a href="#tab5Id" class="nav-link" data-bs-toggle="tab"
            >Tutorias</a
        >
    </li>
    <li class="nav-item" role="presentation">
        <select name="" id="">
        <option value="0">Periodo</option>
        <option value="1">Ene-Jun-24</option>
        <option value="2">Ago-Dic-24</option>
        <option value="3">Ene-Jun-25</option>
        </select>
        

    </li>
   
    <li class="nav-item" role="presentation">
        <form action="{{ route('logout') }}" method="post">
            @csrf
        <button>Logout</button>
        </form>

    </li>
</ul>
