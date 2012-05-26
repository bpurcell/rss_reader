<?php include('includes/header.php'); ?>
<body> 

<div data-role="page">
    	<div id="jqm-homeheader"><a href="index1.php">
			<h1 id="jqm-logo"><img src="img/logo.png" alt="CrossfitProvidence" /></h1></a>
		</div>


   <div data-role="content">	
      <ul data-role="listview" data-theme="c" data-dividertheme="d" data-counttheme="e">
      <?php
            foreach($feed->query->results->item as $item) {
               if ( $siteName === 'psdtuts' ) $comments = $item->comments->content;
               else $comments = $item->comments[1];
            ?>

            <li>
              <h2>
                  <a href="article.php?siteName=<?php echo $siteName;?>&origLink=<?php echo urlencode($item->guid->content);?>">
                 <?php echo $item->title; ?>
                 </a>
              </h2>
              <span class="ui-li-count"><?php echo $comments; ?> </span>
           </li>

      <?php  } ?>
      </ul>
      <hr>
      <?php include('views/menu.tmpl.php'); ?>
   </div><!-- /content -->

   <footer data-role="footer" class="tuts">
   <h4><a href="full_site.php">www.crossfitprovidence.com</a></h4>
   </footer>
</div><!-- /page -->

</body>
</html>


