<?php
    $menu = Router::getMenu('menu_acl');
    $currentPage = currentPage();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?=PROOT?>home"><?= MENU_BRAND ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="main_menu">
    <ul class="navbar-nav mr-auto">
      <?php foreach ($menu as $key => $val):
          $active = ''; ?>
      <?php if(is_array($val)): ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?= $key ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php foreach($val as $k => $v):
            $active = ($v == $currentPage)? 'active':''; ?>
          <?php if($k == 'separator'): ?>
          <div class="dropdown-divider"></div>
        <?php else:  ?>
          <a class="<?= $active ?>" href="<?= $v ?>"<?= $k ?>></a>
        <?php endif; ?>
        <?php endforeach; ?>
        </div>
      </li>
    <?php else:
      $active = ($val == $currentPage)? 'active':''; ?>
      <li><a class="<?= $active ?>" href="<?= $val ?>"><?= $key ?></a></li>


    <?php endif; ?>

    <?php endforeach; ?>


      <li class="nav-item active">
        <?php if(currentUser()): ?>
          <a  href="#">Hellow <?= currentUser()->fname ?></a>
        <?php endif;?>
      </li>

    </ul>

  </div>
</nav>
