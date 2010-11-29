<div id="bodywrap">
   <div id="head">
      <div class="wrap">
         <h2><?php print $site_name; ?></h2>
         <hr />
	     <?php print render($page['header']); ?>
      </div>
   </div>

   <hr />

   <div id="content">
      <div class="wrap">
        <div class="element-invisible"></div>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="title" id="page-title"><span><?php print $title; ?></span></h1><?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php if ($messages): ?><div id="console" class="clearfix"><?php print $messages; ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>

      </div>
   </div>

   <hr />

   <div id="foot">
      <div class="wrap">
         <div id="footertext">
            <div id="news">
                <?php echo render($page['highlighted']); ?>
            </div>
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
