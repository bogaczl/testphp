<html>
 <head>
  <title>PHP Openshift Test</title>
 </head>
 <body>
  <?php echo '<p>Hello Openshift World</p>'; ?> 
  <?php echo 'value from env: ', getenv('TESTKEY'); ?> 
 </body>
</html>
