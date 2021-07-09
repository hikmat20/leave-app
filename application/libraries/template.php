<?php
class Template
{
    var $template_data = [];

    function set($name, $value)
    {
        $this->template_data[$name] = $value;
    }

    function load($view = null, $view_data = array(), $return = FALSE)
    {
        $this->CI = &get_instance();
        $this->set('contents', $this->CI->load->view($view, $view_data, TRUE));
        return $this->CI->load->view('layouts/app', $this->template_data, $return);
    }
};
