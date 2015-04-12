<?php

namespace Lib;

class Contest
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function count()
    {
        return $this->db->contest
            ->count([]);
    }
}
