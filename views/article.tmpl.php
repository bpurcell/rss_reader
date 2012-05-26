<?php include('includes/header.php'); ?>
<body> 

<div data-role="page">

    	<div id="jqm-homeheader"><a href="index1.php">
			<h1 id="jqm-logo"><img src="img/logo.png" alt="CrossfitProvidence" /></h1></a>
		</div>


   <div data-role="content">	
        <h1> <?php echo $feed->title; ?> </h1>
        <div> <?php echo $feed->encoded; ?> </div>
        <hr>
        <?php include('views/menu.tmpl.php'); ?>
        
   </div><!-- /content -->

   <footer data-role="footer" data-position="fixed" class="<?php echo $siteName; ?>">
      <h4> <a href="full_site_redirect.php?url=<?php echo $feed->guid->content;?>" data-icon="forward" rel="external"> Read on CrossfitProvidence.com</a></h4>
   </footer>
</div><!-- /page -->


<script>
   $('img, embed, object').removeAttr('height').removeAttr('width');
</script>

</body>
</html>


