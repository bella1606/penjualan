<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index()
    {
        // Definisikan nama view yang ingin dimuat
        $data['content'] = 'welcome_message'; // Ganti 'content_view' dengan nama view yang ingin dimuat

        // Panggil view dan kirimkan data
        $this->load->view('template/menu', $data);
    }
}
