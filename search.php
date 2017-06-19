<!DOCTYPE html>
<html>
<body>

<?php
$term = $_GET[ "term" ];
$products = array(
   array( "label" => "JAVA", "value" => "1", "url" => "www.google.com" ),
   array( "label" => "DATA IMAGE PROCESSING", "value" => "2", "url" => "www.google.com" ),
   array( "label" => "JAVASCRIPT", "value" => "3", "url" => "www.google.com" ),
   array( "label" => "DATA MANAGEMENT SYSTEM", "value" => "4", "url" => "www.google.com" ),
   array( "label" => "COMPUTER PROGRAMMING", "value" => "5", "url" => "www.google.com" ),
   array( "label" => "SOFTWARE DEVELOPMENT LIFE CYCLE", "value" => "6", "url" => "www.google.com" ),
   array( "label" => "LEARN COMPUTER FUNDAMENTALS", "value" => "7", "url" => "www.google.com" ),
   array( "label" => "IMAGE PROCESSING USING JAVA", "value" => "8", "url" => "www.google.com" ),
   array( "label" => "CLOUD COMPUTING", "value" => "9", "url" => "www.google.com" ),
   array( "label" => "DATA MINING", "value" => "10", "url" => "www.google.com" ),
   array( "label" => "DATA WAREHOUSE", "value" => "11", "url" => "www.google.com" ),
   array( "label" => "E-COMMERCE", "value" => "12", "url" => "www.google.com" ),
   array( "label" => "DBMS", "value" => "13", "url" => "www.google.com" ),
   array( "label" => "HTTP", "value" => "14", "url" => "www.google.com" )
	
);

$result = array();
foreach ($products as $product) {
   $productLabel = $product[ "label" ];
   if ( strpos( strtoupper($productLabel), strtoupper($term) )!== false ) {
      array_push( $result, $product );
   }
}

echo json_encode( $result );
?>
</body>
</html>
