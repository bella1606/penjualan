<?php
$this->load->view('template/header');
$this->load->view('template/navbar');
$this->load->view('template/sidebar');
$this->load->view($content); // Memuat view content yang sesuai dengan variabel $content
$this->load->view('template/footer');
?>
