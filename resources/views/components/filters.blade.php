@section('filters')
  <div class="container-filters">
    <div id="filter"><p class="text-button-filter">Filtrar por</p><img id="filter-img" src="/img/fill-1.svg"></div>
    <div id="order"><p class="text-button-filter">Ordenar por</p><img id="order-img" src="/img/fill-1.svg"></div>
    
    <ul id="dropdown-filter-left" class="dropdown-filter left">
      <a class="item-dropdown" href="/"><li>Todos</li></a>
      <a class="item-dropdown" href="/filter/car"><li>Autos</li></a>
      <a class="item-dropdown" href="/filter/pickup"><li>Pickups y Comerciales</li></a>
      <a class="item-dropdown" href="/filter/suv"><li>SUVs y Crossovers</li></a>
    </ul>

    <ul id="dropdown-filter-right" class="dropdown-filter right">
      <a class="item-dropdown" href="/"><li>Nada</li></a>
      <a class="item-dropdown" href="/order/price/asc"><li>De menor a mayor precio</li></a>
      <a class="item-dropdown" href="/order/price/desc"><li>De mayor a menor precio</li></a>
      <a class="item-dropdown" href="/order/year/desc"><li>Mas nuevos primero</li></a>
      <a class="item-dropdown" href="/order/year/asc"><li>Mas viejos primero</li></a>
    </ul>
  </div>
@show