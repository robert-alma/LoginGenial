<h1>Bienvenido Perfil1</h1>
<form action="{{route('logout')}}" method="POST">
    @csrf
    <button type="submit">Cerrar Sesion</button>
</form>