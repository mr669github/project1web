<?php
  //class includes functions for display of headers,table,content
  class htmlTags
    {
  	 static public function pageHead($text)
  	 {
          return '<h1>' . $text . '</h1>';
         }
         static public function dispHeader($text)
         {
   	  echo '<th  style="font-size: 20px; background-color:#FF9999 " >'.$text.'</th>';
  	 }
  	 static public function dispContent($text)
         {
          echo '<td>'.$text.'</td>';
         }
         static public function dispTable()
  	 {
  	  echo "<table cellpadding='10px' border='2px #ccc solid' margin='5px'  style='border-collapse: collapse'>";
     	 }
     	 static public function endRow()
         {
          echo '</tr>';
         }
     }
?>
