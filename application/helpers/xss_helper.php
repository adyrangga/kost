<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
      
// if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* owner adyranggahidayat@gmail.com a.k.a el araya ady rangga
* created on 15/08/2019
* xss helper adalah filter output xss pada browser
* xss dilakukan oleh penyerang dengan cara memasukkan kode HTML atau client script code lainnya ke suatu situs
* menampilkan data apa adanya (tag html pada saat input tidak dieksekusi browser)
*
* cara penggunaan (add to auto_load helpers, saat menampilkan di html panggil dengan $print($string_data))
*/

if ( ! function_exists('xss'));
function show($str) {
	echo htmlentities($str, ENT_QUOTES, 'UTF-8');
}

/* End of file xss_helper.php */
/* Location: ./system/application/helpers/xss_helper.php */
?>