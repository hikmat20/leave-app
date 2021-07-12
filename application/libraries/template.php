<?php
class Template
{
    private $_data = [];

    public function set($name, $value = NULL)
    {
        if (is_array($name) or is_object($name)) {
            foreach ($name as $item => $value) {
                $this->_data[$item] = $value;
            }
        } else {
            $this->_data[$name] = $value;
        }
        return $this;
    }

    public function load($template, $view = null, $view_data = array(), $return = FALSE)
    {

        // $template = '';
        $this->CI = &get_instance();
        $this->set('contents', $this->CI->load->view($view, $view_data, TRUE));

        $temp = ($template) ? 'layouts/' . $template : 'layouts/app';
        return $this->CI->load->view($temp, $this->_data, $return);
    }
};
