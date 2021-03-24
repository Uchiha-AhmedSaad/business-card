<?php
/**
 * This class is general class to other database classe
 */
class General_Model extends CI_Model {

	public $table;

	function __construct() {
		parent::__construct();
	}

    	public function find_by_id($id = 0,$value) {
		$row = $this -> db -> query("SELECT * FROM " . $this -> table . " WHERE ".$id."=" . (int)$value . " LIMIT 1");
		return !empty($row) ? $row -> row() : FALSE;
	}

	public function is_login_in_admin() {
		return ($this -> session -> userdata('is_login_in_admin'))? TRUE : FALSE  ;
	}


    	public function is_login_in_user() {
		return ($this -> session -> userdata('is_login_in_user'))? TRUE : FALSE  ;
	}


	public function is_logged() {
		return ($this -> session -> userdata('is_logged'))? TRUE : FALSE  ;
	}

	public function find_all() {
		$all = $this -> db -> get($this -> table);
		return $all -> result();
	}

    	public function find_all_desc($id) {
    	 $this->db->order_by($id,'desc');
		$all = $this -> db -> get($this -> table);
		return $all -> result();
	}

       	public function find_all_asc($id) {
    	 $this->db->order_by($id,'asc');
		$all = $this -> db -> get($this -> table);
		return $all -> result();
	}

     	public function find_all_desc_limit($id,$limit) {
     	  $this->db->limit($limit);
    	 $this->db->order_by($id,'desc');
		$all = $this -> db -> get($this -> table);
		return $all -> result();
	}

            	public function find_all_where_desc_limit ($where,$value,$id,$limit) {
        	  $this->db->limit($limit);
    	   $this->db->order_by($id,'desc');
 	      $this->db->where($where,$value);
           $all= $this->db->get($this->table);
           	return $all -> result();
	}
    	public function find_all_where_desc_limit1($where,$id,$limit) {
        	  $this->db->limit($limit);
    	   $this->db->order_by($id,'desc');
 	      $this->db->where($where);
           $all= $this->db->get($this->table);
           	return $all -> result();
	}


         	public function find_all_asc_limit($id,$limit) {
     	  $this->db->limit($limit);
    	 $this->db->order_by($id,'asc');
		$all = $this -> db -> get($this -> table);
		return $all -> result();
	}

	public function find_all_where ($where,$value) {
 	      $this->db->where($where,$value);
           return $this->db->get($this->table);

	}

    	public function find_all_where_desc ($where,$value,$id) {
    	   $this->db->order_by($id,'desc');
 	      $this->db->where($where,$value);
           return $this->db->get($this->table);
	}

        	public function find_all_where_asc ($where,$value,$id) {
    	   $this->db->order_by($id,'asc');
 	      $this->db->where($where,$value);
           return $this->db->get($this->table);
	}


         public function find_all_where_desc1 ($where,$id) {
    	   $this->db->order_by($id,'desc');
 	       $this->db->where($where);
           return $this->db->get($this->table);
	}

         public function find_all_where_asc1 ($where,$id) {
    	   $this->db->order_by($id,'asc');
 	       $this->db->where($where);
           return $this->db->get($this->table);
	}


    public function find_all_where_like($where,$like) {
 	       $this->db->where($where);
           $this->db->like($like);
           return $this->db->get($this->table);
	}



	public function find_last_id($id) {
           $this->db->order_by($id,'desc');
           $this->db->limit(1);
           $all = $this->db->get($this->table);
           return $all;
	}

   	public function find_last_id_where($where,$id) {
           $this->db->order_by($id,'desc');
           $this->db->limit(1);
           $this->db->where($where);
           return $this->db->get($this->table);
	}

	public function pagination($limit = 0, $offset = 0, $order = "DESC" , $id) {
		$this -> db -> order_by($id , $order);
        $this->db->limit($limit,$offset);
		$query = $this -> db -> get($this -> table, $limit, $offset);
		return $query -> result();
	}

	public function pagination_where($limit = 0, $offset = 0, $order = "DESC" , $id, $where) {
		$this -> db -> where($where);
		$this -> db -> order_by($id, $order);
		return $this -> db -> get($this -> table, $limit, $offset);

	}

	public function count_all() {
		$all = $this -> db -> get($this -> table);
		return $all -> num_rows();
	}

	public function count_all_where($where,$value) {
	    $this->db->where($where,$value);
	    $all = $this -> db -> get($this -> table);
		return $all -> num_rows();
	}

    	public function count_all_where1($where) {
	    $this->db->where($where);
	    $all = $this -> db -> get($this -> table);
		return $all -> num_rows();
	}

	public function update($where,$value,$data= array()) {
		$this -> db -> where($where,$value);
		return $this -> db -> update($this -> table, $data);
	}

    	public function update1($where,$data= array()) {
		$this -> db -> where($where);
		return $this -> db -> update($this -> table, $data);
	}

	public function create($data = array()) {
		$q = $this -> db -> insert($this -> table, $data);
		return ($q) ? $this -> db -> insert_id() : FALSE;
	}

	public function delete($where,$value) {
		$this -> db -> where($where, $value);
		return $this -> db -> delete($this -> table);
	}

    	public function delete1($where) {
		$this -> db -> where($where);
		return $this -> db -> delete($this -> table);
	}

	public function delete_array($ids = array()){
		foreach ($ids as  $id) {
		$this -> db -> where('id', $id);
		$this -> db -> delete($this -> table);
		}
		return TRUE;
	}

    public function select_offset($id,$limit,$offset){
	       $this->db->order_by($id,'desc');
           $this->db->offset($offset);
 	       $this->db->limit($limit);
           return $this->db->get($this->table);
    }


    public function select_offset_where($where,$id,$limit,$offset){
	       $this->db->order_by($id,'desc');
           $this->db->offset($offset);
 	       $this->db->limit($limit);
           $this -> db -> where($where);
           return $this->db->get($this->table);
    }

	public function create_capthca_code()
	{
		$this -> load -> helper('captcha');
		$vals = array(
		'img_path' => './public/captcha/' ,
		'img_url' => base_url(). 'public/captcha/' ,
		'img_width' => '150' ,
		'img_height' => '30'
		);
		$cap = create_captcha($vals);
		$this -> session -> set_userdata('captcha' , $cap['word']);
		return $cap['image'] ;
	}

	public function Check_captcha()
	{
	return (strlen($this -> session -> userdata('captcha')) == strlen($this -> input -> post('captcha')))? TRUE : FALSE ;
	}

	public function otherDiffDate($date, $out_in_array=false) // طرح التاريخ
    {
        //if(date_create() <= date_create($date) ){
        $intervalo = date_diff(date_create(), date_create($date));
        $out = $intervalo->format("%d يوم,%H ساعة,%i دقيقة");
        if(!$out_in_array)
            return $out;
        $a_out = array();
        array_walk(explode(',',$out),
        function($val,$key) use(&$a_out){
            $v=explode(':',$val);
            $a_out[$v[0]] = $v[1];
        });
        return $a_out;
		//}else{
		//return FALSE;
		//}
    }


    public function check_captchaa(){
             if($this->input->post('code') !== $this->session->userdata('captcha')){
           return false;
        }else{
            return false;
        }
    }

    public function keywords($text){
        $x= explode(' ',$text);
        $y= implode(',',$x);
        return $y;
    }

           	public function find_all_like_desc ($where,$value,$id) {
    	   $this->db->order_by($id,'desc');
 	      $this->db->like($where,$value);
           return $this->db->get($this->table);
	}

    public function date_arabic($t){
    $days=array('الأحد','الاثنين','الثلاثاء','الأربعاء','الخميس','الجمعة','السبت');
    $months=array('','يناير','فبراير','مارس','أبريل','مايو','يونيو','يوليو','أغسطس','سبتمبر','أكتوبر','نوفمبر','ديسمبر');
    $date = getdate($t);
    echo 'تاريخ اليوم '.$days[$date['wday']].' : '.$date['mday'].' / '.$months[$date['mon']].' / '.$date['year'].' الوقت الأن '.$date['hours'].':'.$date['minutes'];
    }


    public function  queryy($query){
        $q= $this->db->query($query);
        return $q;
    }

        public function  queryy_n($query){
        $q= $this->db->query($query);
        return $q->num_rows();
    }


    function watermark($filename){
        $image_cfg = array();
        $image_cfg['image_library'] = 'GD2';
        $image_cfg['source_image'] = base_url().'uploads/' . $filename;
        $image_cfg['wm_overlay_path'] = base_url().'uploads/' . $filename."bataween";
        $image_cfg['new_image'] = 'upload/mark_'.$filename;
        $image_cfg['wm_type'] = 'overlay';
        $image_cfg['wm_opacity'] = '10';
        $image_cfg['wm_vrt_alignment'] = 'bottom';
        $image_cfg['wm_hor_alignment'] = 'right';
        $image_cfg['create_thumb'] = FALSE;
        $this->image_lib->initialize($image_cfg);
        $this->image_lib->watermark();
        $this->image_lib->clear();
//        echo $this->image_lib->display_errors();
//        die();
    }


    public function currency($from, $to, $amount)

{

   $content = file_get_contents('http://www.google.com/finance/converter?a='.$amount.'&from='.$from.'&to='.$to);



   $doc = new DOMDocument;

   @$doc->loadHTML($content);

   $xpath = new DOMXpath($doc);



   $result = $xpath->query('//*[@id="currency_converter_result"]/span')->item(0)->nodeValue;



   return  str_replace(' '.$to, '', $result);

}

    function timeBetween($start,$end = null){
    $end = (is_null($end)) ? time() : $end;
       $time = $end - $start;
			 if($time > 86400 || $this->session->userdata('site_lang') == "english"){
			 		return date('d/m/Y',$start);
			 }
    if($time <= 60){

        if($time <= 1){
            return 'منذ ثانية واحدة';
        }
        if($time <= 2){
            return 'منذ ثانيتين';
        }
            if($time <= 10){
            return 'منذ '.$time.' ثواني';
        }
        if($time <= 59){
            return 'منذ '.$time.' ثانية';
        }
        if($time <= 60){
            return 'منذ دقيقة واحدة';
        }

    }

    if(60 < $time && $time <= 3600){
       $r = intval($time/60);

        if($r <= 1){
            return 'منذ دقيقة واحدة';
        }

        if($r <= 2){
            return 'منذ دقيقتين';
        }

        if($r <= 10){
            return 'منذ '.$r.' دقائق';
        }

        if($r <= 59){
            return 'منذ '.$r.' دقيقة';
        }

        if($r <= 60){
            return 'منذ ساعة واحدة';
        }

    }


    if(3600 < $time && $time <= 86400){
       $r = intval($time/3600);

        if($r <= 1){
            return 'منذ ساعة واحدة';
        }
        if($r <= 2){
            return 'منذ ساعتين';
        }
        if($r <= 10){
            return 'منذ '.$r.' ساعات';
        }

        if($r <= 23){
            return 'منذ '.$r.' ساعة';
        }

        if($r <= 24){
            return 'منذ يوم أمس';
        }

    }



}

}
?>
