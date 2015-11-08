
<?php if ($sf_user->hasFlash("error")): ?>
    <!--    <div class="panel-body">-->
    <div class="alert bg-danger text-white">
     <button data-dismiss="alert" class="close"> <i class="icon ti-close"></i></button>
        <strong>Alerta!</strong>&nbsp;<?php echo $sf_user->getFlash("error"); ?>
    </div>
    <!--    </div>-->
<?php endif; ?>

<?php if ($sf_user->hasFlash("exito")): ?>
    <!--    <div class="panel-body">-->
    <div class="alert bg-success text-white">
     <button data-dismiss="alert" class="close"> <i class="icon ti-close"></i></button>
        <strong>Exito!</strong>&nbsp;<?php echo $sf_user->getFlash("exito"); ?>
    </div>
    <!--    </div>-->
<?php endif; ?>

<?php if ($sf_user->hasFlash("alerta")): ?>
    <!--    <div class="panel-body">-->
    <div class="alert bg-warning text-white">
      <button data-dismiss="alert" class="close"> <i class="icon ti-close"></i></button>
        <strong>Alerta!</strong>&nbsp;<?php echo $sf_user->getFlash("alerta"); ?>
    </div>
    <!--    </div>-->
<?php endif; ?>

<?php if ($sf_user->hasFlash("info")): ?>
    <!--    <div class="panel-body">-->
    <div class="alert bg-info text-white">
       <button data-dismiss="alert" class="close"> <i class="icon ti-close"></i></button>
        <strong>Importante !</strong>&nbsp;<?php echo $sf_user->getFlash("info"); ?>
    </div>
    <!--    </div>-->
<?php endif; ?>
