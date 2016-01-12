<?php
class PropertyDetails extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		session_cache_limiter ( 'private, must-revalidate' );
		session_cache_expire ( 60 );
		$this->load->library ( 'session' );
	}
	public function index() {
		if (isset ( $_POST ['propertyId'] )) {
			$this->session->set_userdata ( 'propertyId', $_POST ['propertyId'] );
		}
		$this->getRoomDetail();
		//$this->load->view ( 'contact.html' );
	}
	public function getRoomDetail() {
		$this->load->model ( 'PropertyModel' );
		//$response = new stdClass ();
		$propertyDetailInfo = $this->PropertyModel->getPropertyDetail ( $this->session->userdata ( 'propertyId' ) );
		$data['PropertyName']=$propertyDetailInfo->row()->PropertyName;
		$data['PropertyDescription']=$propertyDetailInfo->row()->Description;
		$data['imagePath']=$propertyDetailInfo->row()->ImagePath;
		
		$this->load->view ( 'contact',$data );
	}
}