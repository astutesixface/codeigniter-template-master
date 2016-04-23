<!doctype html>
<html>
<head>
    <title><?php echo $this->template->title->default("Default title"); ?></title>
    <meta charset="utf-8">
    <meta name="description" content="<?php echo $this->template->description; ?>">
    <meta name="author" content="">
    <?php echo $this->template->meta; ?>
    <?php
		// Dynamically add a css stylesheet
		$this->template->stylesheet->add('http://twitter.github.com/bootstrap/assets/css/bootstrap.css');
		
		if($heads and $heads != ''){		
			echo $this->template->head->view($heads);
		}
		
		echo $this->template->stylesheet;
	?>
	
</head>
<body>

<?php 
    // This is an example to show that you can load stuff from inside the template file
    echo $this->template->widget("frontend_nav", array('title' => 'Project name'));
?>

<div class="container" style="margin-top: 60px;">

  <?php
    // This is the main content partial
    echo $this->template->content;
  ?>

  <hr>

  <footer>
    <p>
        <?php 
            // Show the footer partial, and prepend copyright message
            echo $this->template->footer->prepend("&copy; Special Company 2012 - ");
        ?>
    </p>
  </footer>

</div>

<script src="//code.jquery.com/jquery-latest.min.js"></script>
<?php 
    // This is an example to show that you can load stuff from inside the template file  
	
	if($js and $js != ''){
		echo $this->template->foot->view($js);
	}
	//echo $this->template->content->view('news', $news);
?>
<?php //echo $this->template->javascript->add('bootstrap/assets/css/bootstrap.js'); ?>

</body>
</html>