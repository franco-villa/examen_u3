<thead class="table table-bordered">
  <tr>      
  <th scope="col" class="{{ request()->routeIs('home') ? 'activo' : '' }}"><a href="{{ route('home') }}">HOME</a></th> 
  <th scope="col" class="{{ request()->routeIs('servicios') ? 'activo' : '' }}"><a href="{{ route('servicios') }}">Servicios</a></th> 
  <th scope="col" class="{{ request()->routeIs('proyectos') ? 'activo' : '' }}"><a href="{{ route('proyectos') }}">Proyectos</a></th> 
  <th scope="col" class="{{ request()->routeIs('clientes.index') || request()->routeIs('clientes.show') || request()->routeIs('clientes.create') || request()->routeIs('clientes.edit')? 'activo' : ''}}"><a href="{{ route('clientes.index') }}">Clientes</a></th> 
  <th scope="col" class="{{ request()->routeIs('blog') ? 'activo' : '' }}"><a href="{{ route('blog') }}">Blog</a></th> 
  <th scope="col" class="{{ request()->routeIs('contacto') ? 'activo' : '' }}"><a href="{{ route('contacto') }}">Contacto</a></th> 
  
  
  </tr>
</thead>
