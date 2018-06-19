<html>
 <head>
  <title>Strimzi cluster status</title>
 </head>
 <body>
  <?php echo '<p>Performance:</p>' . nl2br(getenv('PROVIDER')) . nl2br(getenv('CONSUMER')); ?> 
  <?php echo '<hr/><p>Topics:</p><br/>' . nl2br(getenv('TOPICS')); ?>  
 </body>
</html>
