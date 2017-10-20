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
