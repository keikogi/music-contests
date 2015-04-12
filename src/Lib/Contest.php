<?php

namespace Lib;

class Contest
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function countAll()
    {
        return $this->db->contest
            ->count([]);
    }
}
