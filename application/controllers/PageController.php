<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller {



	public function index()
	{
		$metadata['metas'] = 
		[
			'title' => 'Introducing Mohini Kitchen - Serving Delicious Indian Cuisine Since 2020', 
			'keywords' => 'Indian cuisine, Mohini Kitchen, North Indian cuisine, South Indian cuisine, Amazon Pay, G Pay, PhonePe, BHIM, satvik food', 
			
			'description' => 'Experience the best of Indian cuisine at Mohini Kitchen. We offer a wide selection of North and South Indian dishes that are made with the freshest ingredients and cooked to perfection. We accept cashless payments through Amazon Pay, G Pay, PhonePe, and BHIM. Come join us for a delicious meal today!',
		];

		$this->load->view('Header', $metadata);
		$this->load->view('Homepage');
		$this->load->view('Footer');
	}

	public function menus()
	{
		$metadata['metas'] = 
		[
			'title' => 'Menu page'
		];

		$this->load->view('Header', $metadata);
		$this->load->view('Itemsmenu');
		$this->load->view('Footer');
	}
}
