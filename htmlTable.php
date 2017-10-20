<?php
    class htmlTable extends page 
    {
    	 public function get()
    	 {
     		$filename = $_GET['filename'];
     		chdir('uploads');
     		$rfile= fopen($filename,"r");

     		stylTags::dispTable();
     		$row=1;
    	        while(($data=fgetcsv($rfile))!== FALSE)
    		 {
      			foreach($data as $value)
     			 {
      			   if($row==1)
      				 {
        			stylTags::dispheader($value);
      				 }
     			   else
      				 {
       				stylTags::dispContent($value);
      				 }
     		          }
      		$row++;
      		stylTags::endRow();
   	         }
     fclose($rfile);
          }
    }
?>
