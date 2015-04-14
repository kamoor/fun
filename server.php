
<html>
  <body>
<center>
		<h2>my app server info</h2>
		<h4>my server: <?php echo gethostname(); ?></h4>
		<h4>ip: <?php echo getHostByName(getHostName()); ?></h4>
		 <h4>memory used: <?php echo round(memory_get_usage()/131072, 2) . " MB"; ?></h4>
	</center>
  </body>
</html>

