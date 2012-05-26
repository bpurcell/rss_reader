<?php include('includes/header.php'); ?> 
<body>
 <div data-role="page">
   <header data-role="header">
     <h1>
         <p>Crossfit Providence</p>
     </h1>
   </header>
   <!-- /header -->

   <div data-role="content" class="homeBody">
       <div class="ui-grid-a">
			<div class="ui-block-a tileDiv tileBorderRight">			
				<a class="wrapper" href="site.php?siteName=CrossfitProvidenceCrossfitWod" id="Nearby"><span id="NearbyIcon" class="nearbyImg"></span></a>
				<div id="LblNearby"  class="tileLabel">Crossfit WODS</div>
				<div id="LblNearbyStatus"></div>
			</div>
			<div class="ui-block-b tileDiv">
				<a class="wrapper" href="site.php?siteName=CrossfitProvidenceElementsWod" id="Location"><span class="locationImg"></span></a>
				<div id="LblLocation" class="tileLabel">Element WODS</div>
			</div>
		</div>
		<div class="ui-grid-a">
			<div class="ui-block-a tileDiv tileBorderRight tileBorderTop">
				<a class="wrapper" href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=9211" id="ByName"><span class="byNameImg"></span></a>
				<div id="LblByName" class="tileLabel">Register for classes</div>
			</div>
			<div class="ui-block-b tileDiv tileBorderTop">
				<a class="wrapper"  href="http://www.crossfitprovidence.com/" id="MyOpenTable"><span class="myOTImg"></span></a>
				<div id="LblMyOT" class="tileLabel">Site</div>
			</div>
		</div>
	</div>
		
		

   <footer data-role="footer" class="tuts">
      <h4> www.crossfitprovidence.com </h4>
   </footer>

 </div>
 <!-- /page -->
</body>
</html>

