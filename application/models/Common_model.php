<?php
class Common_model extends CI_Model{
	public $code;
    public $iUserId;
    public $message;
    public $data = [];
    public $url = [];

    public function  __construct(){
		parent::__construct();
		$this->load->database();
	}

    public function getCode() {
        return $this->code;
    }

    public function getMessage() {
        return $this->message;
    }

    public function getData() {
        return $this->data;
    }

    public function getUrl() {
        return $this->url;
    }

    public function getAllLanguage()
    {
        $this->db->select("l.*");
        $this->db->from('languages as l');
        
        $this->db->order_by("l.vName","ASC");

        $query = $this->db->get();
        $result = $query->result_array();
        
        return $result;
    }

    public function getAllCountry()
    {
        $this->db->select("c.*");
        $this->db->from("country as c");

        $this->db->order_by("c.vName","ASC");

        $query = $this->db->get();
        $result = $query->result_array();

        return $result;
    }

    public function getSettingsData($key)
    {
        $this->db->select("s.*");
        $this->db->from("app_settings as s");
        $this->db->where("s.vKey",$key);

        $query = $this->db->get();
        $result = (array) $query->first_row();
        return $result;
    }
	
	function upload_org_filename($input = "", $folder="default", $allowd="", $thumb="")

	 {
		  $this->load->library('upload');
		  $this->load->library('image_lib');
		  $structure = DOC_ROOT_UPLOAD_PATH;
		  $folders = explode("/", $folder);
		
		  foreach($folders as $dir)
		  {
			   if($dir != "")
			   {
					if (!file_exists($structure.$dir)) {
					 mkdir($structure.$dir, 0777, true);
					 chmod($structure.$dir, 0777);
					}
					else{
					 chmod($structure.$dir, 0777);
					}
					$structure .= $dir."/";
					$folder = $dir;
			   }
		  }

	  if (!file_exists($structure.'thumbs')) {
	   mkdir($structure.'thumbs', 0777, true);
	   chmod($structure.'thumbs', 0777);
	  }
	  else{
	   chmod($structure.'thumbs', 0777);
	  }
	  $config['upload_path']    = $structure;
	  $config['allowed_types']  = $allowd;
	  $config['max_size']       = 20048;
	  //$config['file_name']  = date('YmdHis').rand(0,999);

	  $this->upload->initialize($config);

	  if($this->upload->do_upload($input))
	  {
	   $data = $this->upload->data();
	   if($thumb != "" && isset($thumb['width']) && isset($thumb['height']))
	   {
		$thumbconfig = array(
		 'image_library'  => 'gd2',
		 'source_image'   => $data ['full_path'],
		 'new_image'   => $data ['file_path']."thumbs",
		 'maintain_ratio' => TRUE,
		 'create_thumb'   => TRUE,
		 'thumb_marker'   => "",
		 'width'    => $thumb['width'],
		 'height'    => $thumb['height']
		);

		$this->image_lib->initialize($thumbconfig);

		if(!$this->image_lib->resize())
		{
		 $error = $this->image_lib->display_errors();
		 //print_r($error);
		}
	   }
	   return $data;
	  }
	  else
		{
			$error = $this->upload->display_errors();

			//print_r($error); 

			return false;

		}

		return false;

	 }




function moneyFormatIndia($number){
    $decimal = (string)($number - floor($number));
        $money = floor($number);
        $length = strlen($money);
        $delimiter = '';
        $money = strrev($money);

        for($i=0;$i<$length;$i++){
            if(( $i==3 || ($i>3 && ($i-1)%2==0) )&& $i!=$length){
                $delimiter .=',';
            }
            $delimiter .=$money[$i];
        }

        $result = strrev($delimiter);
        $decimal = preg_replace("/0\./i", ".", $decimal);
        $decimal = substr($decimal, 0, 3);

        if( $decimal != '0'){
            $result = $result.$decimal;
        }

        return $result;
}


function number_words($number,$USD){

 $no =$number;
    $decimal = round($number - ($no = floor($number)), 2) * 100;    
    $digits_length = strlen($no);    
    $i = 0;
    $str = array();
    $words = array(
        0 => '',
        1 => 'One',
        2 => 'Two',
        3 => 'Three',
        4 => 'Four',
        5 => 'Five',
        6 => 'Six',
        7 => 'Seven',
        8 => 'Eight',
        9 => 'Nine',
        10 => 'Ten',
        11 => 'Eleven',
        12 => 'Twelve',
        13 => 'Thirteen',
        14 => 'Fourteen',
        15 => 'Fifteen',
        16 => 'Sixteen',
        17 => 'Seventeen',
        18 => 'Eighteen',
        19 => 'Nineteen',
        20 => 'Twenty',
        30 => 'Thirty',
        40 => 'Forty',
        50 => 'Fifty',
        60 => 'Sixty',
        70 => 'Seventy',
        80 => 'Eighty',
        90 => 'Ninety');
    $digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
    while ($i < $digits_length) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? ' ' : null;            
            $str [] = ($number < 21) ? $words[$number] . ' ' . $digits[$counter] . $plural : $words[floor($number / 10) * 10] . ' ' . $words[$number % 10] . ' ' . $digits[$counter] . $plural;
        } else {
            $str [] = null;
        }  
    }
    
    $Rupees = implode(' ', array_reverse($str));
    $paise = ($decimal) ? "And " . ($words[$decimal - $decimal%10]) ." " .($words[$decimal%10])  : '';
     
            
          

                if($USD=="INR"){
                        $USD="RUPEES";
                        $Point="Paise";
                      }else if($USD=="RUPEES"){
                         $USD="RUPEES";
						 $Point="Paise";
                      }else if($USD=="USD"){
                         $USD=$USD;
                         $Point="Cents";
                      }else if($USD=="EUR"){
                         $USD=$USD;
                         $Point="Cents";
                      }else if($USD=="GBP"){
                         $USD=$USD;
                         $Point="Pence";
                      }else{
                        //
                      }
                    $Paisepo= $paise ."".$Point;   
                    if($paise==""){
                        $Paisepo="";
                    }

                    return $Rupees.$Paisepo." ONLY";
                 
               }



	 


}
?>
