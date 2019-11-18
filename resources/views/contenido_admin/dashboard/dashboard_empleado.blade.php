@extends ('layouts.master_empleado')

@section ('content')
<div class="panel-body">
        <h1>Bienvenido al panel de control {{Auth::user()->name}}</h1>
</div>

@endsection