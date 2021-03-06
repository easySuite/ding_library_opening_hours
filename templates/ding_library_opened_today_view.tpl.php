<div class="ding_library_hours" data-type="opened_today" id="<?php echo mt_rand() ?>">
  <?php if (count($libraries)) :?>
  <ul class="ding-library-opened-today">
    <?php foreach ($libraries as $library) :?>
      <li class="library">
        <div class="library-name"><?php print $library['title'];?></div>
        <?php if (isset($library['opening_hours'])) :?>
          <?php foreach ($library['opening_hours'] as $key => $opening_hour) : ?>
            <?php if (isset($opening_hour['start_time']) && isset($opening_hour['end_time'])) :?>
              <div class="hours">
                <?php if (!empty($opening_hour['notice'])) :?>
                  <?php if ($variables['notice_format']): ?>
                    <span class="raw-notice"><?php print $opening_hour['notice']; ?></span>
                  <?php else: ?>
                    <span class="day-notice-star icon-info" original-title="<?php print $opening_hour['notice']; ?>"></span>
                  <?php endif; ?>
                <?php endif; ?>
                <span class="start_time" title="<?php echo t('Opening time'); ?>"><?php print $opening_hour['start_time']; ?></span> -
                <span class="end_time" title="<?php echo t('Closing time'); ?>"><?php print $opening_hour['end_time'];?></span>
              </div><br/>
            <?php endif; ?>
          <?php endforeach; ?>
        <?php else :?>
          <div class="hours"><?php print t('Closed'); ?></div>
        <?php endif;?>
      </li>
    <?php endforeach;?>
  </ul>
  <?php else:?>
    <?php print t('No content available.'); ?>
  <?php endif;?>
</div>
