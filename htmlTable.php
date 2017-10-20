<?php
    class htmlTable extends page 
    {
    	 public function get()
    	 {
     		$filename = $_GET['filename'];
     		chdir('uploads');
     		$rfile= fopen($filename,"r");
?>