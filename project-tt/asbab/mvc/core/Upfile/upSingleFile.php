<?php
    class upSingleFile
    {
        public $filename = "";
        public $filename_tmp = "";
//
        public function upFile($link)
        {
            $extension=array('jpeg','jpg','png','gif');
            $this->filename=$_FILES['image']['name'];
            $this->filename_tmp=$_FILES['image']['tmp_name'];
            $ext=pathinfo($this->filename,PATHINFO_EXTENSION);

            // $finalimg='';
            if(in_array($ext,$extension))
            {
                if(!file_exists($link.$this->filename))
                {
                    move_uploaded_file($this->filename_tmp, $link.$this->filename);
                    // $finalimg=$filename;
                }else
                {
                    $this->filename = str_replace('.','-',basename($this->filename,$ext));
                    $this->filename = $this->filename.time().".".$ext;
                    move_uploaded_file($this->filename_tmp, $link.$this->filename);
                    // $finalimg=$newfilename;
                }
                return true;
            } else {
                return false;
            }
        }
    }