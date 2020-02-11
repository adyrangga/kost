<?php
/**
* owner adyranggahidayat@gmail.com a.k.a el araya ady rangga
* created on 15/08/2019
* this->template->load(main_layout.php, content.php, $data);
*/
class Template {
	var $template_data = array();
		
	function set($name, $value) {
		$this->template_data[$name] = $value;
	}

	function load($template = '', $view = '' , $view_data = array(), $return = FALSE) {               
		$this->CI =& get_instance();
		$this->set('contents', $this->CI->load->view($view, $view_data, TRUE));			
		return $this->CI->load->view($template, $this->template_data, $return);
	}
}
/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */
?>