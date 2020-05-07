<aside class="menu side">
  <p class="menu-label">
    General
  </p>
  <ul class="menu-list">
    <li><a class="<?php if (URL::current() == URL::to('/')) echo 'is-active'; ?>" href="<?php echo URL::to('/'); ?>">Home</a></li>
    <li><a class="<?php if (URL::current() == URL::to('/projects/new')) echo 'is-active'; ?>" href="<?php echo URL::to('/'); ?>/projects/new">Projects</a></li>
    <li><a class="<?php if (URL::current() == URL::to('/shared-state-101')) echo 'is-active'; ?>" href="<?php echo URL::to('/'); ?>/shared-state-101">Shared State 101</a></li>
    <li><a class="<?php if (URL::current() == URL::to('/coupon')) echo 'is-active'; ?>" href="<?php echo URL::to('/'); ?>/coupon">Redeem Coupon</a></li>
  </ul>
</aside>