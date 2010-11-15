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
