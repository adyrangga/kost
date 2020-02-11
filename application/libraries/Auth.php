<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* owner adyranggahidayat@gmail.com a.k.a el araya ady rangga
* created on 15/08/2019
* class Auth untuk cek session login user
*/
class Auth {
	
	function __construct() 
	{
		$this->cek_auth();
	}

	public function cek_auth() {
		$this->ci =& get_instance();
		$this->sesi  = $this->ci->session->userdata('authenticated');
		if($this->sesi != TRUE){
			$this->ci->session->set_flashdata('message_error', 'Anda Belum Login');
			redirect('akun/login');
			exit();
		}
	}
}

/* End of file Auth.php */
/* Location: ./system/application/libraries/Auth.php */

?>