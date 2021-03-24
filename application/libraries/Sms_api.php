<?php
class Sms_api{
	protected $_api_username = "delala";
	protected $_api_password = "dadmin2020";
	protected $_api_action = "send_sms";
	protected $_sender_name = "DelalaOnlin";//sheel  till it accepted
	protected $_server_output = "";
	protected $base_url = "api.gawali.net";
	public function __construct(){}
	protected function strToHex($var){
        $strlen_var = mb_strlen( $var, "8bit" );
		for($c=0;$c<$strlen_var;$c++){
			$ord_var_c = ord($var{$c});
			switch (true) {
				/* From here : */
				case $ord_var_c == 0x08:
					$ascii .= '\b';
					break;
				case $ord_var_c == 0x09:
					$ascii .= '\t';
					break;
				case $ord_var_c == 0x0A:
					$ascii .= '\n';
					break;
				case $ord_var_c == 0x0C:
					$ascii .= '\f';
					break;
				case $ord_var_c == 0x0D:
					$ascii .= '\r';
					break;
				/* To here : */
				case $ord_var_c == 0x22:
				case $ord_var_c == 0x2F:
				case $ord_var_c == 0x5C:
					// double quote, slash, slosh
					$ascii .= '\\'.$var{$c};
					break;
				case (($ord_var_c >= 0x20) && ($ord_var_c <= 0x7F)):
					// characters U-00000000 - U-0000007F (same as ASCII)
					$char = pack('C*', $ord_var_c);
					$utf16 = $this->utf82utf16($char);
					$ascii .= sprintf('\u%04s', bin2hex($utf16));
					break;
				case (($ord_var_c & 0xE0) == 0xC0):
					// characters U-00000080 - U-000007FF, mask 110XXXXX
					// see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8
					if ($c+1 >= $strlen_var) {
						$c += 1;
						$ascii .= '?';
						break;
					}
					$char = pack('C*', $ord_var_c, ord($var{$c + 1}));
					$c += 1;
					$utf16 = $this->utf82utf16($char);
					$ascii .= sprintf('\u%04s', bin2hex($utf16));
					break;
				case (($ord_var_c & 0xF0) == 0xE0):
					if ($c+2 >= $strlen_var) {
						$c += 2;
						$ascii .= '?';
						break;
					}
					// characters U-00000800 - U-0000FFFF, mask 1110XXXX
					// see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8
					$char = pack('C*', $ord_var_c,
								 @ord($var{$c + 1}),
								 @ord($var{$c + 2}));
					$c += 2;
					$utf16 = $this->utf82utf16($char);
					$ascii .= sprintf('\u%04s', bin2hex($utf16));
					break;
				case (($ord_var_c & 0xF8) == 0xF0):
					if ($c+3 >= $strlen_var) {
						$c += 3;
						$ascii .= '?';
						break;
					}
					// characters U-00010000 - U-001FFFFF, mask 11110XXX
					// see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8
					$char = pack('C*', $ord_var_c,
								 ord($var{$c + 1}),
								 ord($var{$c + 2}),
								 ord($var{$c + 3}));
					$c += 3;
					$utf16 = $this->utf82utf16($char);
					$ascii .= sprintf('\u%04s', bin2hex($utf16));
					break;
				case (($ord_var_c & 0xFC) == 0xF8):
					// characters U-00200000 - U-03FFFFFF, mask 111110XX
					// see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8
					if ($c+4 >= $strlen_var) {
						$c += 4;
						$ascii .= '?';
						break;
					}
					$char = pack('C*', $ord_var_c,
								 ord($var{$c + 1}),
								 ord($var{$c + 2}),
								 ord($var{$c + 3}),
								 ord($var{$c + 4}));
					$c += 4;
					$utf16 = $this->utf82utf16($char);
					$ascii .= sprintf('\u%04s', bin2hex($utf16));
					break;
				case (($ord_var_c & 0xFE) == 0xFC):
					if ($c+5 >= $strlen_var) {
						$c += 5;
						$ascii .= '?';
						break;
					}
					// characters U-04000000 - U-7FFFFFFF, mask 1111110X
					// see http://www.cl.cam.ac.uk/~mgk25/unicode.html#utf-8
					$char = pack('C*', $ord_var_c,
								 ord($var{$c + 1}),
								 ord($var{$c + 2}),
								 ord($var{$c + 3}),
								 ord($var{$c + 4}),
								 ord($var{$c + 5}));
					$c += 5;
					$utf16 = $this->utf82utf16($char);
					$ascii .= sprintf('\u%04s', bin2hex($utf16));
					break;
			}
		}
		return strtoupper(str_replace("\u","",$ascii));
	}
	protected function curl_send($url){
		//dump_exit($url);
		if (function_exists('curl_init')) {
           $curl = @curl_init($url);
           @curl_setopt($curl, CURLOPT_HEADER, FALSE);
           @curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
           @curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
           @curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
           $source = @curl_exec($curl);
           @curl_close($curl);
           if ($source) {
               // var_dump($source);die();
							 // return $source;
			   return $source;
           } else {
               $source = @file_get_contents($url);
			   return $source;
           }
		} else {
		   $source = @file_get_contents($url);
		   return $source;
		   //return die($url);
		}

		/*header('Content-Type: text/html; charset=utf-8');
		//$return = file_get_contents($url);
		//dump_exit($return);

		 $ch = curl_init(($url));
		 curl_setopt($ch, CURLOPT_HEADER, 0);
		 curl_setopt($ch, CURLOPT_POST, 1);
		 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		 curl_setopt($ch, CURLOPT_POSTFIELDS, "");
		 $encrypted_val = curl_exec($ch);
		 $this->_server_output = $encrypted_val;
		 $this->_server_output = strip_tags($this->_server_output);
		 dump_exit($this->_server_output);
		 if(!curl_errno($ch)){ curl_close($ch); return $encrypted_val;}else{
			 curl_close($ch);
			 return curl_error($ch);
		 }*/
	}
	protected function curl_api_requests($_mob="",$_msg=""){
		$_msg = urlencode($_msg);
		// $_mob = (substr($_mob,0,3) == "966")?$_mob:"966".ltrim($_mob,"0");
		$_url = 'https://api.gawali.net?username='.$this->_api_username.'&password='.$this->_api_password.'&phone='.$_mob.'&message_id='.$this->_sender_name.'&text='.$_msg.'&text_encode=utf-8';
		// var_dump($_url);die();
		return  $this->curl_send($_url);
	}
	public function send_sms($_mob="",$_msg=""){
		return $this->curl_api_requests($_mob,$_msg);
	}
	protected function utf82utf16($utf8){
       return mb_convert_encoding($utf8, 'UTF-16', 'UTF-8');
	}
	protected function utf8_to_unicode_codepoints($text) {
		return ''.implode(unpack('H*', iconv("UTF-8", "UCS-2BE", $text)));
	}
}
if(!empty($_GET["developer"])){
	//$API = new Bulk_sms_cron_send_api();
	//$API->send_sms("01097090169","Welcome to Her Style");
}
