<?php
  class htmlTags
    {
  	 static public function pageHead($text)
  	   {
          return '<h1>' . $text . '</h1>';
       }
      static public function dispHeader($text)
      {
   	     echo '<th  style="font-size: 20px; background-color: #f0f0f0 " >'.$text.'</th>';
  	  }
  	   static public function dispContent($text)
         {
          echo '<td>'.$text.'</td>';
          echo '<even td style=" backgorund-color: #F6F6F6">';
          echo '<odd td style=" background-color:#FFF">';
         }
          static public function dispTable()
  	  {
             echo '<tr style="background-color: #f0f0f0">';
  	     echo "<table cellpadding='10px' border='2px #ccc solid' margin='5px'  style='border-collapse: collapse'>";
  	  }
?>
