<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/pradinis">Satybų įmonė</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            {{-- Pradinis puslapis --}}
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/pradinis">Pradinis</a>
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
          {{-- "Apie" puslapis --}}
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/apie">Apie</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>