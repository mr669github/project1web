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
         $filename = $_FILES["uploadCSVfile"]["name"];
         $fileType= pathinfo($target_file,PATHINFO_EXTENSION);
        
?>
