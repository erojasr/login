<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{


    public function __construct()
    {
        parent::__construct();

        session_start();

        // load Login_model
        $this->load->model('users');

    }

    public function index()
    {

        // load the library because we need to sanitize the form values
        $this->load->library('form_validation');

        // set the inputs rules trim, required and xss_clean, we need this to prevent users attacks
        $this->form_validation->set_rules('email','Email','trim|required|xss_clean');
        $this->form_validation->set_rules('password','Password','trim|required|xss_clean');

        if( $this->form_validation->run() !== false )
        {
            $res = $this
                ->users
                ->verifyUser(
                    $this->input->post('email'),
                    $this->input->post('password')
                );

            if($res !== false)
            {
                // sessions
                // redirect
                redirect('welcome');
            }
        }

        $this->load->view('login/login_view');
    }


}