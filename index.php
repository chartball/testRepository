<?php
	$on_local = stristr($_SERVER["SERVER_NAME"], "localhost") || stristr($_SERVER["SERVER_NAME"], "10."); 
?>

<!doctype html>  
<!--[if lt IE 7 ]>
<html lang="en" class="no-js ie6">
<![endif]-->
<!--[if IE 7 ]>
<html lang="en" class="no-js ie7"> 
<![endif]-->

<!--[if IE 8 ]>
<html lang="en" class="no-js ie8"> 
<![endif]-->

<!--[if IE 9 ]>	
<html lang="en" class="no-js ie9"> 
<![endif]-->

<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en" class="no-js"> 
<!--<![endif]-->

<?php
	/**
	 * Set this to 1 if you want this to exclude headers/footers by default
	 */
	$standalone = 0; 
	
	//You can turn headers off by doing ?standalone=1 in the URL
	if (isset($_GET['standalone'])){ $standalone = $_GET['standalone']; }
	
?>

<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<title>2013 New York City Mayoral Primary Results - WSJ.com</title>
	<link rel="shortcut icon" href="http://si.wsj.net/favicon.ico"/>
	<link rel="apple-touch-icon" href="http://s.wsj.net/apple-touch-icon.png"/>
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
	<!-- ipad -->
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="format-detection" content="telephone=no">
	<!-- meta tags -->
	<link rel="image_src" href="http://online.wsj.com/public/resources/documents/wsjfblogo.jpg"/>  <!-- this should be a promo thumbnail type image. Used by FB and others for link sharing-->
	<meta name="author" content="WSJ.com News Graphics"/>
	<meta name="title" content="2013 New York City Mayoral Primary Results"/>
	<meta name="description" content="Track results in the Sept. 10 primary for Republican and Democratic mayoral candidates."/>
	<meta name="keywords" content="2013 New York City Mayoral Primary Results Map Interactive"/>
	
	<!-- FB like for retrofit -->
	<meta property="og:image" content="http://online.wsj.com/public/resources/documents/wsjfblogo.jpg"/> 
	<meta property="og:title" content=""/>
	<meta property="og:url" content=""/> 
	<meta property="og:type" content="article"/>
	<meta property="og:site_name" content="The Wall Street Journal"/>
    <!-- tracking -->
	<script type="text/javascript" src="http://online.wsj.com/public/resources/documents/WSJ_Interactive_TrackingAndAdsv5.min.js"></script> 

    <script>
    if(!<?php if (isset($_GET['standalone'])){echo 'true';} else {echo 'false';}?>) {
        (function(a){if(/android.+mobile|avantgo|bada\/|blackberry|playbook.+tablet|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od|ad)|iris|kindle|lge |maemo|midp|mmp|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))){
            var u = (function(uri, key, value) {
              var re = new RegExp("([?|&])" + key + "=.*?(&|$)", "i");
              separator = uri.indexOf('?') !== -1 ? "&" : "?";
              if (uri.match(re)) {
                return uri.replace(re, '$1' + key + "=" + value + '$2');
              }
              else {
                return uri + separator + key + "=" + value;
              }
            })(window.location.protocol+'//'+window.location.hostname+window.location.pathname+window.location.search, 'standalone', '1');
            console.log("Switching to Mobile version:"+u+location.hash);
            window.location = u+window.location.hash;
        }})(navigator.userAgent||navigator.vendor||window.opera);
        
    }
    </script>

	<!-- base styles from Chris Johnson and CSS group -->
	<link rel="stylesheet" href="http://fonts.wsj.com/k/qox0wee-d.css"/>
	<link href="http://cloud.webtype.com/css/d0fbfa08-8cb4-49be-ac2f-9b02e71c406a.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/global.min.css"/>
	<link rel="stylesheet" href="css/wsj_interactive.css"/>

	<?php if ($standalone==0){ ?>
	<link rel="stylesheet" href="css/retrofit.css"/>
	<?php } ?>
	

	<!-- This is where YOUR style sheet goes -->
	<link rel="stylesheet" href="css/jquery.socialclimber.css"/>
	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.5/leaflet.css" />
	<link rel="stylesheet" href="css/style.css"/>
	
	<!-- Turn off tracking by including ?tracking=0 in the URL -->
	<script type="text/javascript">
		var tracking = parseInt("<?if (isset($_GET['tracking'])) { echo $_GET['tracking'];}?>",10);
	</script>
	
	
	
	
</head>

<!--
	Uncomment this to show the grid
	<body class="debug">
-->

<body>
	<?php if ($standalone==0) { ?>
	<div id="retrofit_wrapper">
		
		<?php 
		/**
		 * Change this if you are using a different header (such as elections)
		 */
		if(!$on_local) {
			include_once("/var/www/html/includes/wsj_header.php");
		}
		?>
	    
	    <!-- Top Ad 
	    	COMMENT OUT to Turn off
	    -->
	    <div id="top_ad"><iframe src="http://ad.doubleclick.net/adi/interactive.wsj.com/sports_interactive;!category=;sz=728x90;ord=8921892189218921;" width="728" height="90" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe></div>

	<?php } ?>

    <!-- Main Page Starts -->
	<div id="interactive_wrapper">
		<div id="container">
			
			<!-- DELETE THIS unless you are using it. REPLACE WITH YOUR CODE -->
			<div id="headDeck">
				<div id="socialtools">
					
				</div>
				<h1>2013 New York City Mayoral Primary</h1>
				<p class="dek">Track results in the Sept. 10 primary for Republican and Democratic mayoral candidates<br/><b><a href="http://graphics.wsj.com/documents/NYCMAYORHOSTED13/" target="_parent">Full results from the Associated Press &raquo;</a></b></p>
				<!--
				<p class="graphic_byline">Interactive by <a href="https://twitter.com/ccanipe" target="_blank">Chris Canipe</a>/<a href="http://www.twitter.com/@WSJGraphics" target="_blank">The Wall Street Journal</a></p>
				-->
			</div>
			<div id="mainContent">
				<div id="toolTip">
					<table id="ttInfo"></table>
					<table id="ttText"></table>
				</div>
				<div id="navDiv">
					<div id="partyToggle">
						<div id="demBtn" class="toggleBtn active" val="dem">Democrats</div>
						<div id="gopBtn" class="toggleBtn" val="gop">Republicans</div>
					</div>
					<div id='timeStamp'>Last updated: <span id='timeHere'></span></div>
				</div>
				
				<div id="contentsDiv">
					
					<div id="resultsDiv">
						<div class="subHead">Candidate totals</div>
						<div id='percentReporting'><span id='percentHere'></span> of precincts reporting</div>
						<table id="candidateList"></table>
					</div>
					
					<div id="mapDiv">
						<div id="mapTarget"></div>
						<div id="key"></div>
						<div class="subHead">Votes by assembly district</div>
					</div>
					
				</div>
				
				
				
			</div>
			<div id="sourceLine">Source: Associated Press<br/>Photos: PJ Smith for The Wall Street Journal; Daniella Zalcman for The Wall Street Journal; Ramsay de Give for The Wall Street Journal; Louis Lanzano for the Wall Street Journal; Bryan Thomas for the Wall Street Journal; AP; Getty Images; Patrick McMullan; Peter Carllaftes</div>			
			<!-- DELETE UP TO HERE -->

		</div> <!-- end of #container -->
	</div> <!-- end of #interactive_wrapper -->
		
	<?php 
		if ($standalone == 0 && !$on_local){ 
			include_once("/var/www/html/includes/wsj_footer.php");
			echo "</div>"; /* end of #retrofit_wrapper */
		} 
	?>

	<!-- jquery -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript">!window.jQuery && document.write(unescape('%3Cscript src="libs/jquery-1.7.2.min.js"%3E%3C/script%3E'));</script>
	
	
	<script type="text/javascript" src="http://fonts.wsj.com/rtn5rej.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>


	<!-- tracking -->
	
	<script type="text/javascript">
		var proj_id = "NYCPRIMARY";
		var proj_headline = "2013 New York City Mayoral Primary Results";
	
		var trackingOpts = {	
	       pageName_over:"WSJ_infogrfx_interactive_"+proj_id+"_"+proj_headline
	    };
                           
		// Turn off tracking by including ?tracking=0 in the URL
		// If tracking is not set or is not equal to 0, project will track.
		if (tracking != 0) {
			//UNCOMMENT IF YOU WANT TO TRACK THE PAGE LOAD 
			window.countPage(proj_id, proj_headline, "", trackingOpts);	
		}
	</script>
	<!-- interactive logic -->
	<script type="text/javascript" src="libs/modernizr-1.6.min.js"></script>
	<script type="text/javascript" src="libs/jquery.socialclimber.js"></script>
	<script src="http://cdn.leafletjs.com/leaflet-0.6.2/leaflet.js"></script>
	<script type="text/javascript" src="js/common.js"></script>
	<script type="text/javascript" src="js/moment.min.js"></script>
	<script type="text/javascript" src="js/chroma.min.js"></script>
	
	

	<!-- THIS IS YOUR SCRIPT FILE -->
	<script type="text/javascript" src="js/mapData.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
