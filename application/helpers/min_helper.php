<?php
function my_word_limiter($str,$limit=100){
	if(empty($str))
		return "";
	$str_arr = explode(" ",$str);
	if($limit < count($str_arr)){
		$str_arr = array_slice($str_arr, 0, $limit, true);
		$str = implode(" ",$str_arr);
		$str .= ' ...';
	}
	return $str;
}


  if (!function_exists('dump')) {
    function dump ($var, $label = 'Dump', $echo = TRUE)
    {
        // Store dump in variable
        ob_start();
        var_dump($var);
        $output = ob_get_clean();
        // Add formatting
        $output = preg_replace("/\]\=\>\n(\s+)/m", "] => ", $output);
        $output = '<pre style="background: #FFFEEF; color: #000; border: 1px dotted #000; padding: 10px; margin: 10px 0; text-align: left;">' . $label . ' => ' . $output . '</pre>';
        // Output
        if ($echo == TRUE) {
            echo $output;
        }
        else {
            return $output;
        }
    }
}
if (!function_exists('dump_exit')) {
    function dump_exit($var, $label = 'Dump', $echo = TRUE) {
        dump ($var, $label, $echo);
        exit;
    }
}


function settings()
{
   $CI =& get_instance();
   $settings = $CI->db->where('setting_id','1')->get('setting')->row();
   return $settings;
}
function slider()
{
   $CI =& get_instance();
   $slider = $CI->db->get('slider')->result_array();

   return array_column($slider, 'photo');
}
function Categories()
{
   $CI =& get_instance();
  $categories = $CI->db->get('cat')->result_array();
  if (!empty($CI->session->userdata('language')) && $CI->session->userdata('language') == 'ar') {
    $categories = array_column($categories,'cat_name','cat_id'); 

  }
  else{
    $categories = array_column($categories,'cat_name_en','cat_id'); 
  }
  return $categories;
}

function Countries()
{
  $CI =& get_instance();
  $countries = $CI->db->get('country')->result_array();
  if (!empty($CI->session->userdata('language')) && $CI->session->userdata('language') == 'ar') {
    $countries = array_column($countries,'country_name','country_id');
  }
  else{
    $countries = array_column($countries,'country_name_en','country_id');
  }
  return $countries;
}

function e_lang($word)
{
    $CI =& get_instance();
    if (empty(lang($word))) {
        return $word;
    }
    else{
        if (empty($CI->session->userdata('language'))) {
          return lang($word);
        }
        else if ($CI->session->userdata('language') == 'ar') {
          return lang($word);
        }
        else{
          return $word;
        }
        
    }
}

  function uploadMedia($file)
  {

    $dir  = __DIR__.'/../../uploads/';
    $path   = $file['tmp_name'];
    $name   = $file['name'];
    $size   = $file['size'];
    $type   = $file['type'];
    $error  = $file['error'];
    if (!$error)
    {
      $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
      $result = '';
      for ($i = 0; $i < 20; $i++)
      {
        $result .= $characters[mt_rand(0, 61)];
      }
      $ex=explode ('.',$name);
      $end = end($ex);
      $forname=time()."_".$result.'.'.$end;
      if(move_uploaded_file($path , $dir.$forname))
      {return $forname;}
    }
    else
    {
      return '';
    }
  }



  if (!function_exists('Sweet_Session_fired')) {
    function Sweet_Session_fired()
    {
      $CI =& get_instance();
      $CI->session->unset_userdata('Flash_message');
      $CI->session->unset_userdata('title');
      $CI->session->unset_userdata('icon');
      $CI->session->unset_userdata('timer');
      $CI->session->unset_userdata('text');
    }
  }
  if (!function_exists('SweetFlash')) 
  {

    function SweetFlash($element,$method,$status = "success",$time = 5000)
    {
       include __DIR__.'/../libraries/Sweetalert.php';  

       return new Sweetalert($element,$method,$status,$time);

    }
  }
  if (!function_exists('getCurrentLanguages')) 
  {
    function getCurrentLanguages()
    {
      $CI =& get_instance();

      $session = $CI->session->userdata('language');

      if (empty($session)) {
        return 'ar';
      }
      else{
        return $session;
      }
    }
  }

if (!function_exists('split_sentence')) 
{
   function split_sentence($sentence,$num = 10)
  {
    $explode = explode(' ', $sentence);
    $slice = array_slice($explode,0,$num);

    $implode = implode(' ', $slice);

    return $implode;
  
  }
}


if (!function_exists('findInSearchString')) {
  function findInSearchString($url,$get)
  {
  
    $string = parse_url($url, PHP_URL_QUERY);


    if ($string) {
        return $url .= '&'.$get;
    } else {
        return $url .= '?'.$get;
    }

  }
}


function current_urlz()
{
    $CI =& get_instance();

    $url = $CI->config->site_url($CI->uri->uri_string());
    return $_SERVER['QUERY_STRING'] ? $url.'?'.$_SERVER['QUERY_STRING'] : $url;
}


function cities()
{
  $CI =& get_instance();
  $city = $CI->db->get('city')->result_array();
  if (getCurrentLanguages() == 'en') {
    $cities = array_column($city,'city_name_en','city_id');
  }
  else{
    $cities = array_column($city,'city_name','city_id');
  }
  return $cities;
}