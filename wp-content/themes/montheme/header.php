<!DOCTYPE html>
<html lang="fr" data-theme="nord">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body>
    <div class="navbar bg-base-100">
        <div class="navbar-center">
            <?php wp_nav_menu([
                'theme_location' => 'header',
                'container' => false,
                'menu_class' => 'flex menu menu-horizontal justify-center px-1 gap-4'
            ]); ?>
        </div>
        <!-- <div class="navbar-start">
      <LoginModal ref="loginModal" @open-modal="handleOpenModal" />
      <details class="dropdown md:hidden">
        <summary class="btn btn-ghost btn-circle">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h16M4 18h7"
            />
          </svg>
        </summary>

        <ul
          class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52 gap-4"
        >
          <li>
            <a>
              <RouterLink to="/">Accueil</RouterLink>
            </a>
          </li>
          <li>
            <a>
              <RouterLink to="/tickets">Mes tickets</RouterLink>
            </a>
          </li>
          <li>
            <a class="btn btn-sm btn-primary" @click.prevent="openLoginModal"> Connexion </a>
          </li>
        </ul>
      </details>
      <a class="hidden md:flex btn btn-ghost text-xl">
        <RouterLink to="/">Support</RouterLink>
      </a>
    </div>
    <div class="navbar-center">
      <a class="md:hidden btn btn-ghost text-xl">
        <RouterLink to="/">Support</RouterLink>
      </a>
      <ul class="hidden md:flex menu menu-horizontal px-1 gap-4">
        <li>
          <a class="link link-hover">
            <RouterLink to="/">Accueil</RouterLink>
          </a>
        </li>
        <li>
          <a class="link link-hover">
            <RouterLink to="/tickets">Mes tickets</RouterLink>
          </a>
        </li>
      </ul>
    </div>
    <div class="navbar-end">
      <ul class="hidden md:flex menu menu-horizontal px-1 gap-4">
        <li>
          <a class="btn btn-sm btn-primary" @click.prevent="openLoginModal"> Connexion </a>
        </li>
      </ul>
    </div> -->
    </div>

    <div class="mx-auto w-full">