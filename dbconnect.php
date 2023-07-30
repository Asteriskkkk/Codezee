<?php

	$dbhost = '162.214.81.23';
   $dbuser = 'learnfun_tarun';
   $dbpass = 'tarupattu';
   $database = 'learnfun_cz';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$database);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   
   ?>
   
   