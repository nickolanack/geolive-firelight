<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
   
	<head>
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/firelight/css/slicknav.css" type="text/css" />
		
		<?php JHtml::_('jquery.framework'); ?>
		<jdoc:include type="head" />
		<script src="<?php echo $this->baseurl ?>/templates/firelight/js/jquery.slicknav.min.js"></script>
			
		<!-- Responsive and mobile friendly stuff -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<?php 
		
			//this ensures that our template file loads above all js, but after all other css files. 
			//so that changes here will take precedence over those with the same selector.
			JFactory::getDocument()->addStyleSheet($this->baseurl.'templates/'.$this->template.'/css/template.css');
			$this->addFavicon('http://www.thefirelightgroup.com/thoushallnotpass/wp-content/uploads/2014/03/favicon.png');
			
			//get Itemid of each page for use as class in <body>
			$item=JRequest::getVar('Itemid','');
			
		?>
		<script type="text/javascript">
			jQuery(document).ready(function(){
				jQuery('#nav').slicknav({prependTo: 'header', label: 'Menu'});
			});
	</script>
		
		
	</head>
	
	<body class="<?php echo "item_".$item; ?>">
		<div class="main-page <?php echo "item_".$item; ?>">
			<div class="wrapper clearfix">
			<header>
				<div id="header_logo">
                    <a href="http://firelight.geolive.ca" class="logo">
                    	<img src="/templates/firelight/images/firelight-logo.png" alt="Logo">
                    </a>
                </div>
				<nav id="nav-wrap" class="main-menu menu-container">
					<ul id="nav" class="nav">
						<li class="menu-item"><a <?php if ($item==103) echo "class=\"active\""; ?> href="/">Map</a></li>
						<li class="menu-item"><a <?php if ($item==113) echo "class=\"active\""; ?> <?php if (!(JFactory::getUser()->guest==1)) echo "id=\"signout\""; ?> href="/signin"><?php echo (JFactory::getUser()->guest==1)?"Signin":"Signout"; ?></a></li>
						<li class="menu-item"><a <?php if ($item==117) echo "class=\"active\""; ?> href="/signup"><?php echo (JFactory::getUser()->guest==1)?"Signup":""; ?></a></li>
					</ul>
				</nav>
			</header>
			</div>
			<div class="wrapper home-text">
				<h3 class="home">THE</h3> 
				<h1 class="home">FIRELIGHT GROUP RESEARCH COOPERATIVE</h1>
				<h2 class="home">WE PROVIDE COMMUNITY-BASED RESEARCH AND TECHNICAL SUPPORT SERVICES</h2>
			</div>
			<section class="site-content">
				<jdoc:include type="component" />
			</section> 
		</div>
		<div class="additional-content">
			<section class="site-bottom">
				<jdoc:include type="modules" name="bottom" />
			</section>
		</div>
		
		<!-- allows signout form to be submitted without visiting /signin -->
		<form id="login-form" class="form-vertical" method="post" action="/signin">
			<input type="hidden" value="com_users" name="option"> 
			<input type="hidden" value="user.logout" name="task"> 
			<input type="hidden" value="<?php echo base64_encode("index.php?Itemid=".$item);?>" name="return"> 
			<input type="hidden" value="1" name="<?php echo JSession::getFormToken(); ?>">
		</form>
		
		<script type="text/javascript">
			jQuery('#signout').on('click',function(e){
				 e.preventDefault(); 
				 jQuery('#login-form').submit();
			});
		</script>
		
		
	</body>
	
</html>