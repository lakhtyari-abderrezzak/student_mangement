<?php

use Soap\Url;
?>
<nav class="navbar navbar-expand-lg navbar-custom shadow-sm">
  <div class="container">

    <a class="navbar-brand d-flex align-items-center gap-2" href="<?=ROOT?>">
      <div>
        <img src="https://icons.iconarchive.com/icons/pictogrammers/material/128/school-icon.png" alt="School icon"
          width="32" height="32">
      </div>
      <span class="" >My School</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="<?=ROOT?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>features">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>tests">Tests</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>classes">Classes</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            User
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?=ROOT?>login">Profile</a></li>
            <li><a class="dropdown-item" href="<?=ROOT?>register">Dashboard</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </li>
      </ul>

    </div>
  </div>
</nav>