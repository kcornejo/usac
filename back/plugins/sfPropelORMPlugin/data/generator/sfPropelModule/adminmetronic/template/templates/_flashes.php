[?php if ($sf_user->hasFlash('notice')): ?]
  <div class="notice ad-notif-success grid_12 small-mg alert alert-success"><p>[?php echo __($sf_user->getFlash('notice'), array(), 'sf_admin') ?]</p></div>
[?php endif; ?]

[?php if ($sf_user->hasFlash('error')): ?]
  <div class="error ad-notif-error grid_12 small-mg alert alert-error"><p>[?php echo __($sf_user->getFlash('error'), array(), 'sf_admin') ?]</p></div>
[?php endif; ?]
