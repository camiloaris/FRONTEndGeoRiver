
<li class="{{ Request::is('programas*') ? 'active' : '' }}">
    <a href="{!! route('programas.index') !!}"><i class="fa fa-edit"></i><span>programas</span></a>
</li>

<li class="{{ Request::is('variableCuantitativas*') ? 'active' : '' }}">
    <a href="{!! route('variableCuantitativas.index') !!}"><i class="fa fa-edit"></i><span>variableCuantitativas</span></a>
</li>


<li class="{{ Request::is('variableCualitativas*') ? 'active' : '' }}">
    <a href="{!! route('variableCualitativas.index') !!}"><i class="fa fa-edit"></i><span>variableCualitativas</span></a>
</li>


<li class="{{ Request::is('proyectos*') ? 'active' : '' }}">
    <a href="{!! route('proyectos.index') !!}"><i class="fa fa-edit"></i><span>proyectos</span></a>
</li>


<li class="{{ Request::is('salidas*') ? 'active' : '' }}">
    <a href="{!! route('salidas.index') !!}"><i class="fa fa-edit"></i><span>salidas</span></a>
</li>

