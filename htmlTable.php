<?php
    //Display of class in a table form
    class htmlTable extends page 
    {
    	 public function get()
    	 {
     		$filename = $_GET['filename'];
     		chdir('uploads');
     		//now read file
     		$rfile= fopen($filename,"r");
     		//dispTable() is called to display table
     		stylTags::dispTable();
     		$row=1;
    	        while(($data=fgetcsv($rfile))!== FALSE)
    		 {
      			foreach($data as $value)
     			 {
      			   if($row==1)
      				 {
      				//using stylTags class for html tag displays 	
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
