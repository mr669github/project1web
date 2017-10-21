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
         
?>
