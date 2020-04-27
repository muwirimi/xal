<!DOCTYPE html>
<html>
<head>
	<title>App Selector</title>
	<link href="/dashboard/stylesheets/all.css" rel="stylesheet" type="text/css" />
</head>
<body style="background-color: black">
	<div class="contain-to-grid">
    <nav class="top-bar" data-topbar>
      <ul class="title-area">
        <li class="name">
          <h1><a href="apps.php">Apps List</a></h1>
        </li>
        <li class="toggle-topbar menu-icon">
          <a href="#">
            <span>Menu</span>
          </a>
        </li>
      </ul>

      <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">  
          <li class=""><a href="/phpmyadmin/" title="To view the databases">phpMyAdmin</a></li>
        </ul>
      </section>
    </nav>
  </div>
  <div id="wrapper"  style="background-color: black">
    <div class="hero"  style="background-color: black">
       <div class="row">
         <div class="large-12 columns">
            <?php
            foreach (glob("*") as $filename)
            	{
            		if ($filename == "xampp" OR $filename == "webalizer" OR $filename == "favicon.ico"){} 
            			else
            				{
            					if (file_exists($filename."/app_info.php"))
            						{ 
            							require ($filename."/app_info.php");
            							?>
            							<button onclick="return confirm('Open <?php echo ucwords($filename); ?>\n<?php echo $desc; ?>');window.location='/<?php echo $filename; ?>';" title="<?php echo $title; ?>"><?php echo ucwords($title); ?></button>
            							&nbsp;
            							<?php
            						}
            				}
            	} 
            ?>
         </div>
       </div>
    </div> 
  </div>

</body>
</html> 