[?php if ($sf_user->hasFlash('notice')): ?]
<div class="panel-body">
    
<div class="colorGritter text-white bg-info list-group-item list-group-item-info"><p>[?php echo __($sf_user->getFlash('notice'), array(), 'sf_admin') ?]</p></div>
</div>
[?php endif; ?]

[?php if ($sf_user->hasFlash('error')): ?]
<div class="panel-body">
 <div class="colorGritter text-white bg-danger list-group-item list-group-item-danger"><p>[?php echo __($sf_user->getFlash('error'), array(), 'sf_admin') ?]</p></div>
</div>
 [?php endif; ?]
