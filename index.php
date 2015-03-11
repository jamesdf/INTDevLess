<?php
defined('_JEXEC') or die;
// 11/3/14 Changed refrences from '../j333/' to '../'
// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');

// Load optional Bootstrap bugfixes
// 3/9/15 We need to find out exactly what this does and where it finds things 
//	one thing for sure: it affects whether "hidden-desktop"  , etc is found
// Commented 3/10/15  JHtmlBootstrap::loadCss($includeMaincss = true); 
JHtmlBootstrap::loadCss($includeMaincss = false);

?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<jdoc:include type="head" />

 		<!-- replaced 12.11.14 JDF <link href="templates/INTBorders/css/custom.css" rel="stylesheet" type="text/css"> -->
 		<!-- replaced 3/9/15 <link href="<?php echo $this->baseurl?>/templates/<?php echo $this->template;?>/css/custom.css" rel="stylesheet" type="text/css">-->
		<link href="<?php echo $this->baseurl?>/templates/<?php echo $this->template;?>/css/template.css" rel="stylesheet" type="text/css">

	</head>

	<body>
		<div id="bgwrap">  <!-- 4/23/14 start bgwrap-->

		  <header class="row-fluid">    
            <!-- 1/28/14 Allegedly: visible-lg-block, (lg, md, sm, xs) and hidden-lg-block (lg, md, sm, xs) -- replace: visible-desktop visible-tabloid, etc. HOWEVER, for us phone, desktop and tabloid seem to be the only ones working -->
				<!--  3/11/15 <div class="span10 visible-desktop visible-tabloid hidden-phone">-->
				<div class="span8 visible-desktop visible-tabloid hidden-phone">
		             <!-- replaced 12.11.14 JDF	<a href="../index.php/homepage"><img src="templates/INTBorders/images/header.png" alt="INT Information Systems, Inc. Click for Home. " class="pull-left"/></a></div> -->
                  <!-- 1/27/15 <a href="<?php echo $this->baseurl?>"><img src="<?php echo $this->baseurl?>/templates/<?php echo $this->template;?>/images/header.png" alt="INT Information Systems, Inc. Click for Home. " class="pull-left"/></a></div> 1/27/15 -->
					<a href="<?php echo $this->baseurl?>"><img src="<?php echo $this->baseurl?>/templates/<?php echo $this->template;?>/images/header.png" alt="INT Information Systems, Inc. Click for Home. "/></a>
            	</div>
            <!-- 1/28/15 Added "visible-" class changes (above and below) to attempt to change the graphic for smaller browser sizes -->
				<div class="span8 visible-phone hidden-desktop hidden-tabloid">
					<a href="<?php echo $this->baseurl?>"><img src="<?php echo $this->baseurl?>/templates/<?php echo $this->template;?>/images/headersmall.png" alt="INT Information Systems, Inc. Click for Home. "/></a>
            	</div>
            
                  <div class="span2" ><jdoc:include type="modules" name="contact" style="html5" class="pull-right"/></div>
                  <!-- 1/27/15 <div class="offset2" ><jdoc:include type="modules" name="contact" style="html5"/></div> -->
          </header>
	        
			<!-- //*responsive nav bar  -->     
		        <div class="row-fluid">
		            <nav class="span12 navbar navbar-default">
		              <div class="navbar-inner">
		                <div class="container-fluid"> 
		                  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
                           <b> Menu</b>
		                      <span class="icon-bar"></span> 
		                      <span class="icon-bar"></span> 
		                      <span class="icon-bar"></span>
		                  </a>
		                  <div class="nav-collapse collapse">
		                    <jdoc:include type="modules" name="menubar" style="none" />
		                  </div>
		                </div>
		              </div>
		            </nav>
		          </div>
	
			<!-- //* 4/7/14 Make room for the Testimonial Banner where carousel lives -->
		        <?php if ($this->countModules('tbanner')) : ?>	
				<div class="row-fluid">                  
					<div class="well">
						<jdoc:include type="modules" name="tbanner" style="html5" />
		      			</div>
				</div>
		        <?php endif ?>
		        
			<div class="row-fluid" id="main">
			          <?php if ($this->countModules('left')) : ?>
			              <div class="span2">
			                  <jdoc:include type="modules" name="left" style="html5" />
			              </div>
			          <?php endif ?>        
			          
			          <?php if ($this->countModules('right')) : ?>
			          
			              <?php if ($this->countModules('left')) : ?>
			                  <div class="span8">
			              <?php else: ?>
			                  <div class="span10">
			              <?php endif ?>
			                    
			          <?php else: ?>
			              <?php if ($this->countModules('left')) : ?>
			              <?php else: ?>
			                <div class="span12">
			              <?php endif ?>
			          <?php endif; ?>
			                  <jdoc:include type="modules" name="breadcrumbs" style="html5"/>
			                  <jdoc:include type="message"/>
			                  <jdoc:include type="component"/>
			                </div>
			          <?php if ($this->countModules('right')) : ?>                
			              <div class="span2">
			                  <jdoc:include type="modules" name="right" style="html5" />
			              </div> 
			          <?php endif; ?>
			         
			</div>
	  
			<footer class="row-fluid">
				<div class="span12">
					<p></p>
					&copy; 2014 <i>INT</i> Information Systems, Inc. <jdoc:include type="modules" name="footer" style="html5"/>
				</div>
			</footer>
			
		</div>	<!-- 4/23/14 end bgwrap-->


	</body>

</html>