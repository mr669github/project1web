<?php
    class formLoad extends page
    {   
        //This function is to request input file from user and display form
        public function get()
        {
        $form = '<form action="index.php?page=formUpload" method="POST"
        enctype="multipart/form-data">';
        $form .= '<input type="file" name="uploadCSVfile" id="uploadfile">';
        $form .= '<input type="submit" name="displayCSVtoHTML" id="submit">';       
        $form .= '</form>';
        $this->html .= htmlTags::pageHead('Submit File to Upload');
        $this->html .= $form;
        }

        //This function is to upload to target directory, and change header 
         public function post()
        {
         $target_dir = "uploads/";
         $target_file = $target_dir . $_FILES["uploadCSVfile"]["name"];
         $fileid = $_FILES["uploadCSVfile"]["name"];
         $fileType= pathinfo($target_file,PATHINFO_EXTENSION);
        //First checking for csv file then redirect user to another page if saved in target directory
        if(($fileType == "csv")&&(move_uploaded_file($_FILES["uploadCSVfile"]["tmp_name"],$target_file)))
        {
          stringFunctions::printthis("<hr><br/><h1>Congrats! CSV File <b>" . $filename . "  is uploaded! </h1><hr><br/>");
          header("Refresh: 2;url=index.php?page=htmlTable&filename=$fileid");
        }
        else if ($fileType != "csv")
       {
            stringFunctions::printThis("Sorry, Error! And Upload only CSV Files!");
       }
?>
