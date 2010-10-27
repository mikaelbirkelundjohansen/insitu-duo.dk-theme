<div id="bodywrap">
   <div id="head">
      <div class="wrap">
         <h2>IN SITU</h2>
         <hr />
	 <?php if ($main_menu): ?>
                		<?php print theme('links__system_main_menu', array(
                  			'links' => $main_menu,
                  			'attributes' => array('id' => 'gnav'),
                            'heading' => array(
                                'text' => t('Main menu'),
                                'level' => 'h2',
                                'class' => array('element-invisible')),
                            )); ?>
                        <?php endif; ?>
      </div>
   </div>

   <hr />

   <div id="content">
      <div class="wrap">
      <h1><?php print $title; ?></h1>
      <?php echo render($page['content']); ?>
      </div>
   </div>

   <hr />

   <div id="foot">
      <div class="wrap">
         <div id="footertext">
                  <div id="news">
                    <?php echo render($page['highlighted']); ?>
                 </div>
          <p>&copy; 2004-<?php echo date('Y'); ?> IN SITU</p>
         </div>
      </div>
   </div>

   <div id="lpic">
      &nbsp;
   </div>

   <div id="rpic">
      &nbsp;
   </div>

</div>
