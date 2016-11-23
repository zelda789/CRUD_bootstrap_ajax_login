<?php

class Dashboard{

		protected $_ci;
		function __construct(){
			$this->_ci = &get_instance();
		}


function views( $template = NULL, $data = NULL ){
	if( $template != NULL )
		$data['_body']	= $this->_ci->load->view($template, $data, TRUE);
		$data['_content']	= $this->_ci->load->view($template, $data, TRUE);
		$data['_js']	= $this->_ci->load->view('template/js', $data, TRUE);

	
}
}

?>