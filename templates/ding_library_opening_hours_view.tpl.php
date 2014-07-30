<div class="ding_library_hours ding-library-opening-hours" data-type="opening_hours" id="<?php echo mt_rand() ?>">
  <?php foreach ($days as $date => $info) :?>
    <div class="day">
      <div class="day-name"><?php print $info['day_name']; ?></div>
      <div class="hours">
        <?php if (isset($info['start_time']) && isset($info['end_time'])) :?>
          <?php print $info['start_time']; ?> - <?php print $info['end_time'];?>
        <?php else: ?>
          <?php print t('closed'); ?>
        <?php endif; ?>
      </div>
    </div>
  <?php endforeach; ?>
</div>
