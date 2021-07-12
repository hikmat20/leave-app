<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EmployeesModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->dbHr = $this->load->database('second', TRUE);
    }

    public function all()
    {
        return $this->dbHr->get('employees');
    }
}
