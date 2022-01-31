<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="http://<?php echo APP_HOST; ?>"> Controle de Estoque </a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="http://<?php echo APP_HOST; ?>"> Início <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            Usuário
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="http://<?php echo APP_HOST; ?>/user/">Lista</a>
            <a class="dropdown-item" href="http://<?php echo APP_HOST; ?>/user/register">Cadastro</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            Fornecedor
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="http://<?php echo APP_HOST; ?>/supplier/">Lista</a>
            <a class="dropdown-item" href="http://<?php echo APP_HOST; ?>/supplier/register">Cadastro</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            Produto
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="http://<?php echo APP_HOST; ?>/product/">Lista</a>
            <a class="dropdown-item" href="http://<?php echo APP_HOST; ?>/product/register">Cadastro</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled"> Sair </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
