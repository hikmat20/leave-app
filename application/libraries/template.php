<?php
class Template
{
    var $template_data = [];

    function set($name, $value)
    {
        $this->template_data[$name] = $value;
    }

    function load($template, $view = null, $view_data = array(), $return = FALSE)
    {

        // $template = '';
        $this->CI = &get_instance();
        $this->set('contents', $this->CI->load->view($view, $view_data, TRUE));

        $temp = ($template) ? 'layouts/' . $template : 'layouts/app';
        return $this->CI->load->view($temp, $this->template_data, $return);
    }
};
