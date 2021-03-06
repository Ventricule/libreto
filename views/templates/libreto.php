<?php global $libreto ?>

<?php snippet('header') ?>

<div id="container">
  <?php snippet('title') ?>
  <?php snippet('modals') ?>
  <?php snippet('nav') ?>
  <article>
    <?php
    if ($libreto->pads()->selected()) :
      $iframe = $libreto->pads()->selected()->url();
    else :
      $iframe = false;
      if($_SESSION['mode'] == 'read'):
        header('Location: ?mode=write');
      endif;
    endif;
    ?>
    <iframe id="framepad" name="myframe" width=600 height=400 src="<?= $iframe ?>"></iframe>
  </article>
</div>
<?php snippet('footer') ?>
