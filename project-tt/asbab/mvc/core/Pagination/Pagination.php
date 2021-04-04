<?php
    class Pagination
    {
        public $page ;
        public $total_records ;
        public $limit;
        public $current_page;
        public $total_page;
        public $start;

        public function __construct($page, $total_records, $limit)
        {
            $this->page = $page;
            $this->total_records = $total_records;
            $this->limit = $limit;
        }
        public function run ()
        {
            $this->current_page = !empty($this->page) ? $this->page : 1;
            $this->total_page = ceil($this->total_records / $this->limit);
            if ($this->current_page > $this->total_page)
            {
                $this->current_page = $this->total_page;
            }
            else if ($this->current_page < 1)
            {
                $this->current_page = 1;
            }
            $this->start = ($this->current_page - 1) * $this->limit;
        }
    }