<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    private $data = [];

    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        }
        $this->template->set([
            'page_title' => 'Dashboard',
            'page_icon' => 'mdi mdi-dashboard'
        ]);
    }

    public function index()
    {
        // $this->template->set('nama', 'halaman');
        $this->template->load('', 'dashboard/index', $this->data);
    }
}
