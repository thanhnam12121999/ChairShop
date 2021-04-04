<?php
    class upMutilFile
    {
        public $filenames = "";
        public $filename_tmp = "";
        public $nameImage = [];

        public function upMutilImg ()
        {
            $extension=array('jpeg','jpg','png','gif');
            foreach ($_FILES['images']['tmp_name'] as $key => $value) {
                $this->filenames=$_FILES['images']['name'][$key];
                $this->filename_tmp=$_FILES['images']['tmp_name'][$key];
                $ext=pathinfo($this->filenames,PATHINFO_EXTENSION);

                if(in_array($ext,$extension))
                {
                    if(!file_exists('../../assets/images/product/'.$this->filenames))
                    {
                        array_push($this->nameImage,$this->filenames);
                        move_uploaded_file($this->filename_tmp, '../../assets/images/product/'.$this->filenames);
                    }else
                    {
                        $this->filenames=str_replace('.','-',basename($this->filenames,$ext));
                        $this->filenames=$this->filenames.time().".".$ext;
                        move_uploaded_file($this->filename_tmp, '../../assets/images/product/'.$this->filenames);
                        array_push($this->nameImage,$this->filenames);
                    }
                } else {
                    return false;
                }
            }

        }
    }
?>