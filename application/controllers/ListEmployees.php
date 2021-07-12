<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ListEmployees extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('auth/login');
        }

        $this->load->model('Employees/EmployeesModel', 'Empl');

        $this->template->set([
            'page_title' => 'Employees',
            'page_icon' => 'mdi-account-multiple',
        ]);
    }
    public function index()
    {

        $employees = $this->Empl->all()->result();
        $this->template->set([
            'employees' => $employees
        ]);
        $this->template->load('', 'listEmployees/index');
    }

    public function employees()
    {
        $this->load->view('listEmployees/employess');
    }
}
