<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<header>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand mx-5" href="#">Pokemon pi</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('produto.index')}}">Produto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('categoria.index')}}">Categoria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('tipo.index')}}">Tipo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('produto.lixeira')}}">Lixeira</a>
        </li>
        <li class="nav-item">
          <div class="nav-link font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
        </li>
        <li class="nav-item">

          <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();" >
              {{ __('Log out') }}
            </x-responsive-nav-link>
          </form>
        </li>


      </ul>
    </div>
  </nav>
</header>