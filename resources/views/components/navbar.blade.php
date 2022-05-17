<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Satybų įmonė</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            {{-- Pradinis puslapis --}}
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Pradinis</a>
          </li>
          {{-- Paslaugos navbar --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Paslaugos
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/paslaugos/add">Pridėjimas</a></li>
              <li><a class="dropdown-item" href="/paslaugos">Redagavimas</a></li>
            </ul>
          </li>
          {{-- Kainos navbar --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Kainos
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/paslaugos/add">Pridėjimas</a></li>
              <li><a class="dropdown-item" href="/paslaugos">Redagavimas</a></li>
            </ul>
          </li>
          {{-- "Apie" puslapis --}}
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Apie</a>
          </li>
        </ul>
        <form class="d-flex" action="/paslaugos/search" method="get">
          <input class="form-control me-2" type="text" name="query" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>