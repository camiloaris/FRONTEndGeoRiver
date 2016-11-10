
<li class="{{ Request::is('programas*') ? 'active' : '' }}">
    <a href="{!! route('programas.index') !!}"><i class="fa fa-edit"></i><span>programas</span></a>
</li>

<li class="{{ Request::is('variableCuantitativas*') ? 'active' : '' }}">
    <a href="{!! route('variableCuantitativas.index') !!}"><i class="fa fa-edit"></i><span>variableCuantitativas</span></a>
</li>


<li class="{{ Request::is('variableCualitativas*') ? 'active' : '' }}">
    <a href="{!! route('variableCualitativas.index') !!}"><i class="fa fa-edit"></i><span>variableCualitativas</span></a>
</li>

