<?php
class MY_Loader extends CI_Loader{

    public function template($view, $vars = array(), $return = FALSE)
    {

        $vars['title'] = !isset($vars['title'])?"":$vars['title'];
        $vars['description'] = !isset($vars['description'])?"":$vars['description'];


        $content  = $this->view('templates/header', $vars, $return);
        //$content .= $this->view('templates/sidebar', $vars, $return);
        $content .= $this->view($view, $vars, $return);
        $content .= $this->view('templates/footer', $vars, $return);

        if($return)
        {
            return $content;
        }
    }

}
?>