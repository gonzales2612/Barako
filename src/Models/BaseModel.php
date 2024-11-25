<?php

namespace App\Models;

use App\Models\BaseModel;

class BaseModel
{
    protected $db;

    public function __construct()
    {
        // Global Database Connection
        global $conn;
        $this->db = $conn;   
        if (!$this->db) {
            $this->db = Database::getConnection();
    }
}

    public function fill($payload)
    {
        foreach ($payload as $key => $value)
        {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }


    
}