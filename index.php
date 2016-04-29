<link rel="stylesheet" href="<?php print $config['url_to_module']; ?>vendor/net-shell/mw-ink/css/jquery.miniColors.css" />
<link href="<?php print $config['url_to_module']; ?>vendor/net-shell/mw-ink/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php print $config['url_to_module']; ?>vendor/net-shell/mw-ink/css/bootstrap-responsive.min.css" rel="stylesheet">

<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if IE]><script type="text/javascript" src="<?php print $config['url_to_module']; ?>vendor/net-shell/mw-ink/js/excanvas.js"></script><![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>	
<script type="text/javascript" src="<?php print $config['url_to_module']; ?>vendor/net-shell/mw-ink/js/fabric.js"></script>
<script type="text/javascript" src="<?php print $config['url_to_module']; ?>vendor/net-shell/mw-ink/js/tshirtEditor.js"></script>
<script type="text/javascript" src="<?php print $config['url_to_module']; ?>vendor/net-shell/mw-ink/js/jquery.miniColors.min.js"></script>

<style type="text/css">
.footer {
padding: 70px 0;
margin-top: 70px;
border-top: 1px solid #E5E5E5;
background-color: whiteSmoke;
}			
body {
padding-top: 60px;	        
}
.color-preview {
border: 1px solid #CCC;
margin: 2px;
zoom: 1;
vertical-align: top;
display: inline-block;
cursor: pointer;
overflow: hidden;
width: 20px;
height: 20px;
}
.rotate {  
-webkit-transform:rotate(90deg);
-moz-transform:rotate(90deg);
-o-transform:rotate(90deg);
/* filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=1.5); */
-ms-transform:rotate(90deg);		   
}		
.Arial{font-family:"Arial";}
.Helvetica{font-family:"Helvetica";}
.MyriadPro{font-family:"Myriad Pro";}
.Delicious{font-family:"Delicious";}
.Verdana{font-family:"Verdana";}
.Georgia{font-family:"Georgia";}
.Courier{font-family:"Courier";}
.ComicSansMS{font-family:"Comic Sans MS";}
.Impact{font-family:"Impact";}
.Monaco{font-family:"Monaco";}
.Optima{font-family:"Optima";}
.HoeflerText{font-family:"Hoefler Text";}
.Plaster{font-family:"Plaster";}
.Engagement{font-family:"Engagement";}

</style>

<?php
require 'layouts/default.php';