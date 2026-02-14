<?php

class Home extends CI_Controller
{
    public function index(): void
    {
        $this->load->view('home');
    }
}
