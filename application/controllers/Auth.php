<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('auth/register');
        $this->load->view('template/footer');
    }

    public function create()
    {
        // input
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $birth = $this->input->post('birthdate');

        // helper validation
        $emailCheck = check_email($email);
        $passCheck = check_password($password);
        $ageCheck = check_age($birth);

        // checking validation
        if ($emailCheck == true && $passCheck == true && $ageCheck == true) {
            // save session
            $data = [
                'email' => $email,
                'isLogin' => true,
            ];

            $this->session->set_userdata($data);;
            redirect('home');
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                Login gagal 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('isLogin');
        redirect('auth');
    }
}
