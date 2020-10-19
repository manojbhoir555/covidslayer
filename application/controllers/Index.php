<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function __construct()
	{
	parent::__construct();
	//Load Library and model.
		$this->load->model('Adminmaster_model');
		
		$this->load->library('session');
	
	}
	public function index()
	{
		$this->load->view('index/login');
	}
	
	public function register()
	{
		$post=$this->input->post();
		if($post){
				$ip_address='';
				if (!empty($_SERVER['HTTP_CLIENT_IP']))
				{
				$ip_address = $_SERVER['HTTP_CLIENT_IP'];
				}
				elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
				{
				$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
				}
				else
				{
				$ip_address = $_SERVER['REMOTE_ADDR'];
				}
		$email=$post['email'];
			
			$exist_email = $this->Adminmaster_model->isUnique('users','email',$email);
			
			if($exist_email==TRUE)
			{           
		                    $image_info = array();
							$image_info = $_FILES;
					$avatar=$image_info['avatar']['name'];
					$data_to_be_insert = array(
						//'bus_id'			=>  $get_company_id,
						'username'		=>	$post['username'],
						'email'			=>	$post['email'],
						'password' 		=>	md5($post['password']),
						'avatar'		=>	$avatar,
						
						
						'ipaddress'		=>	$ip_address,
						
						'status'			=>  "Active",
						);
					$get_user_id = $this->Adminmaster_model->insertData('users',$data_to_be_insert);


						if ($get_user_id>0){
							
							if($image_info['avatar']['name']!='')
							{
							
							$this->Common_model->upload_org_filename('avatar','avatar/'.$get_user_id,$allowd="jpg|jpeg|png",array('width'=>200,'height'=>300));
							}
							$user=$this->Adminmaster_model->selectData('users',"*",array('id'=>$get_user_id));
							  $session_data = array(
										'id' => $user[0]->id,
										
										'email'	 => $user[0]->email,
										
										'username' => $user[0]->username,
										
										'user_photo'=>$user[0]->avatar,
										'createdat'	 => $user[0]->createdat,
										
										'status'=> $user[0]->status,

										);

				
					      $this->session->set_userdata('user_session',$session_data);

							 $this->session->set_flashdata('success',"Profile created successfully");
							 redirect('profile/profile');  
						}
						else
						{
							 $this->session->set_flashdata('error',"Profile Not created ");
						 echo "Profile not created";
						}
			}
			else{
				 $this->session->set_flashdata('error',"Email already exist");
				$this->load->view('index/signup');
			}
			
		}else{
			$this->load->view('index/signup');
		}
	}
	
	
	public function login()
	{
		$where = $this->input->post();

		
		$email = $where['email'];
		$password = $where['password'];
        $remember=$where;
		$data = array();
		if ($where) {
			$error = array();
			$e_flag=0;
			if(trim($where['email']) == ''){
				$error['userid'] = 'Username cannot be blank.';
				$e_flag=1;
			}
			if(trim($where['password']) == ''){
				$error['password'] = 'Password cannot be blank.';
				$e_flag=1;
			}


			if ($e_flag == 0) {
				$where = array(
								'email'		=>	$email,
								'password'	=>	md5($password),
							);


				$chekUserEmail = $this->Adminmaster_model->selectData('users', '*', array('email'=>$email));
				if(!$chekUserEmail)
				{
					 $this->session->set_flashdata('error',"This email id not register with us");
					 redirect("/");
				}

				$user = $this->Adminmaster_model->selectData('users', '*', $where);
				//print $this->db->last_query(); exit();

				if (count($user) > 0) {
                  
				  $session_data = array(
										'id' => $user[0]->id,
										
										'email'	 => $user[0]->email,
										
										'username' => $user[0]->username,
										
										'user_photo'=>$user[0]->avatar,
										'createdat'	 => $user[0]->createdat,
										
										'status'=> $user[0]->status,

										);

				
					$this->session->set_userdata('user_session',$session_data);
                    
					if(isset($remember['remember_me']) && $remember['remember_me']=="on"){

					$year = time() + 31536000;
					//setcookie('remember_me_u', $remember['email'], $year);
					//setcookie('remember_me_pass', $remember['password'], $year);

					$my_cookie= array(

					'name'   => 'remember_me_u',
					'value'  => $remember['email'],
					'expire' => '30000000',
					'secure' => TRUE

					);
					
					$this->input->set_cookie('remember_me_u', $remember['email'], $year);
					

					$my_cookie1= array(

					'name'   => 'remember_me_pass',
					'value'  => $remember['password'],
					'expire' => '30000000',
					'secure' => TRUE

					);
					$this->input->set_cookie('remember_me_pass', $remember['password'], $year);
					
					}
                        
                      redirect("profile/profile");
					
		    }
			
			  $this->session->set_flashdata('error',"username or password is wrong");
					 redirect("/");
			  
		    }
		
		}

	}
	
			public function logout()
			{


			$this->session->sess_destroy();

			redirect('http://'.$_SERVER['HTTP_HOST'].'/covidslayer');
			}
	
}


?>