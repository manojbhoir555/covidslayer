<?php 
    
    function public_path($type="www")
    {
        return base_url()."public/";
    }

    function base_path($type="www")
    {
      return base_url();
    }

    function index_path($type="www")
    {
      return base_url()."index/";
    }

    function admin_path($type="www")
    {
      return base_url()."admin/";
    }

    function profile_img_path($type="www")
    {
        return base_url()."public/uploads/profile_images/";
    }
    function upload_path($type="www")
    {
        return base_url()."public/uploads/";
    }

    function translate($text)
    {
      $CI =& get_instance();
      $line=$CI->lang->line($text);
      if(empty($line))
      {
        $line=$text;
      }
      
      return $line;
    }

    function is_login()
    {

      $CI =& get_instance();
      $session = $CI->session->userdata('user_session');
      if (!isset($session['id'])) {
        redirect(base_url());
      }
    }

    function is_login_admin_panel()
    {

      $CI =& get_instance();
      $session = $CI->session->userdata('admin_session');
      if (!isset($session['admin_id'])) {
        redirect(base_url().'admin-dashboard');
      }
    }

    

    function pr($arr, $option="")
    {
      echo "<pre>";
      print_r($arr);
      echo "</pre>";
      if ($option != "") {
        exit();
      }
    }

    function get_active_tab_main($tab)
    {
      $CI =& get_instance();
        if ($CI->router->fetch_class() == $tab) {
            return 'active';
        }

    }

    function get_active_tab($tab)
    {
      $CI =& get_instance();
        if ($CI->router->fetch_method() == $tab) {
            return 'tree';
        }
        else {
            return 'notree';
        }

    }

   

 	function generatePIN($digits = 4){
	    $i = 0; //counter
	    $pin = ""; //our default pin is blank.
	    while($i < $digits){
	        //generate a random number between 0 and 9.
	        $pin .= mt_rand(0, 9);
	        $i++;
	    }
	    return $pin;
	}


  

  function sendEmail($from='',$list,$subject,$content,$attachment=array())	
  {
        $ci =& get_instance();
        $ci->load->library('email');
		$config['protocol'] = PROTOCOL;
		$config['smtp_crypto'] = SMTP_CRYPTO;
		$config['smtp_host'] = SMTP_HOST;
		$config['smtp_port'] = SMTP_PORT;
		$config['smtp_user'] = SMTP_USERNAME; 
		$config['smtp_pass'] = SMTP_PASSWORD;
		$config['charset'] = "utf-8";
		$config['mailtype'] = "html";
		$config['newline'] = "\r\n";
    
		$ci->email->initialize($config);
    $ci->email->set_crlf("\r\n");   
        $ci->email->set_newline("\r\n");
		$ci->email->from(FROM_EMAIL, $from);
		//$list = array('manali@parextech.com');
		foreach($attachment as $k=>$v){
			$ci->email->attach($v);	
		}
		
		$ci->email->to($list);
		$ci->email->bcc(BCC);
		//$ci->email->reply_to(REPLY_TO, REPLY_NAME);
		$ci->email->subject($subject);
		$ci->email->message($content);
		$email_Sent=$ci->email->send();
       // echo $ci->email->print_debugger();
        return $email_Sent;
    }

    

   
   

function formatSizeUnits($bytes)
    {
        if ($bytes >= 1073741824)
        {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }
        elseif ($bytes >= 1048576)
        {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }
        elseif ($bytes >= 1024)
        {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        }
        elseif ($bytes > 1)
        {
            $bytes = $bytes . ' bytes';
        }
        elseif ($bytes == 1)
        {
            $bytes = $bytes . ' byte';
        }
        else
        {
            $bytes = '0 bytes';
        }

        return $bytes;
}

		function smart_wordwrap($string, $width = 75, $break = "\n") {
			// split on problem words over the line length
			$pattern = sprintf('/([^ ]{%d,})/', $width);
			$output = '';
			$words = preg_split($pattern, $string, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);

			foreach ($words as $word) {
				if (false !== strpos($word, ' ')) {
				// normal behaviour, rebuild the string
					$output .= $word;
				} else {
					// work out how many characters would be on the current line
					$wrapped = explode($break, wordwrap($output, $width, $break));
					$count = $width - (strlen(end($wrapped)) % $width);

					// fill the current line and add a break
					$output .= substr($word, 0, $count) . $break;

					// wrap any remaining characters from the problem word
					$output .= wordwrap(substr($word, $count), $width, $break, true);
				}
			}

			// wrap the final output
			return wordwrap($output, $width, $break);
		}

?>