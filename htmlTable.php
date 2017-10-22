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
     		htmlTags::dispTable();
		//using this variable to keep track of header positions
     		$i=1; 
    	        while(($data=fgetcsv($rfile))!== FALSE)
    		 {
      			foreach($data as $value)
     			 {
      			   if($i==1)
      				 {
      				//using stylTags class for html tag displays 	
        			htmlTags::dispheader($value);
      				 }
     			   else
      				 {
       				htmlTags::dispContent($value);
      				 }
     		          }
      		$i++;
      		htmlTags::endRow();
   	         }
     fclose($rfile);
          }
    }
?>
