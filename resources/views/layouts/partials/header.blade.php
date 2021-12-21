<header>
    <h1>coders free</h1>
    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home')? 'active' : ''}}">Home</a></li>
            <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*')? 'active' : ''}}">Cursos</a></li><!-- cursos.* toma como si fuera cursos.cualquier cosa, de esta forma nos aseguramos que, sin importar a que curso ingrese, el link del nav de cursos va a quedar siempre resaltado-->
            <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros')? 'active' : ''}}">Nosotros</a></li>
        </ul>
    </nav>
</header>