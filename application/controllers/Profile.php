<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

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
		
		

		is_login();
		
		$this->user_session = $this->session->userdata('user_session');
	
	}
	public function index()
	{
		
	}
	
	public function profile()
	{
		$data['profiles']=$this->Adminmaster_model->selectData("users","*");
		$this->load->view('profile/profile',$data);
		
	}
	
	public function new_game(){
		
		//$data=$this->input->post();
		$this->session->unset_userdata('gameid');
		print $this->session->userdata('game_id');
		if($this->session->userdata('game_id')==""){
		$userid=$this->session->userdata['user_session']['id'];
		$post['userid']=$userid;
		
		$gameid=$this->Adminmaster_model->insertData("game_master",$post);
		print $gameid;
		$data['gameid']=$this->session->set_userdata('gameid', $gameid);
		}
		echo json_encode($data);exit;
		
	}
	
	public function get_updates(){
		
		$data=$this->input->post();
		
		
		
		$userid=$this->session->userdata['user_session']['id'];
		$gameid=$this->session->userdata('gameid');
		
		
		$data['comentry']=$this->Adminmaster_model->selectData("commentry","*",array('user_id'=>$userid,'gameid'=>$gameid),'id','DESC');
		
		
		echo json_encode($data);exit;
		
	}
	public function result_update(){
		
		$data=$this->input->post();
		
		
		
		$userid=$this->session->userdata['user_session']['id'];
		$gameid=$this->session->userdata('gameid');
		
		$post=array(
		'player1'=>$data['player'],
		'player2'=>$data['dragon'],
		'result'=>$data['winner'],
		);
		
		$update=$this->Adminmaster_model->updateData(" game_master",$post,array('userid'=>$userid,'id'=>$gameid));
		$this->session->unset_userdata('gameid');
		
		echo json_encode($data);exit;
		
	}
	
	public function update_game(){
		
		$data=$this->input->post();
		$userid=$this->session->userdata['user_session']['id'];
		$username=$this->session->userdata['user_session']['username'];
		$gameid=$this->session->userdata('gameid');
		$lifePlayer=$data['player'];
		$lifeDragon=$data['dragon'];
		
		if($data['type']=='attack'){
			
			$lifeRand=rand(1,10);
			$lifeRand1=rand(1,10);
			
			$lifePlayer -=$lifeRand1;
		    $lifeDragon -=$lifeRand;
			
			$post=array(
			 'user_id'=>$userid,
			 'gameid'=>$gameid,
			  'description'=>$username." Attack the dragon by ".$lifeRand,
			);
			
			$post1=array(
			 'user_id'=>$userid,
			 'gameid'=>$gameid,
			  'description'=> "Dragon Attack the ".$username." by ".$lifeRand1,
			);
			$commentry=$this->Adminmaster_model->insertData("commentry",$post);
			$commentry1=$this->Adminmaster_model->insertData("commentry",$post1);
			
		}
		else if($data['type']=='blast'){
			
			$lifeRand=rand(1,10);
			$lifeRand1=rand(1,10);
			
			$lifeDragon-=10;
		    $lifePlayer -=$lifeRand1;
			
			
			$post=array(
			 'user_id'=>$userid,
			 'gameid'=>$gameid,
			  'description'=>$username." Blast the dragon by  10",
			);
			
			$post1=array(
			 'user_id'=>$userid,
			 'gameid'=>$gameid,
			  'description'=> "Dragon Attack the ".$username." by ".$lifeRand1,
			);
			$commentry=$this->Adminmaster_model->insertData("commentry",$post);
			$commentry1=$this->Adminmaster_model->insertData("commentry",$post1);
			
		}
		
		else if($data['type']=='heal'){
			
			$lifeRand=rand(1,10);
			$lifeRand1=rand(1,10);
			
			$lifePlayer +=10;
		    $lifePlayer -=$lifeRand1;
			
			$post=array(
			 'user_id'=>$userid,
			 'gameid'=>$gameid,
			  'description'=>$username." Healing his power by  15",
			);
			
			$post1=array(
			 'user_id'=>$userid,
			 'gameid'=>$gameid,
			  'description'=> "Dragon Attack the ".$username." by ".$lifeRand1,
			);
			$commentry=$this->Adminmaster_model->insertData("commentry",$post);
			$commentry1=$this->Adminmaster_model->insertData("commentry",$post1);
			
		}
		else if($data['type']=='giveup'){
			
						
			$lifePlayer =0;
		    $lifeDragon =100;
			
			$post=array(
			 'user_id'=>$userid,
			 'gameid'=>$gameid,
			  'description'=>$username." give up the game to the dragon ",
			);
			
			
			$commentry=$this->Adminmaster_model->insertData("commentry",$post);
			
			
		}else {
			
			
			
			$lifePlayer =100;
		    $lifeDragon =100;
			
		}
		$data['player']=$lifePlayer;
		$data['dragon']=$lifeDragon;
		echo json_encode($data);exit;
		
		
	}
	
	public function games(){
		
		$userid=$this->session->userdata['user_session']['id'];
		$username=$this->session->userdata['user_session']['username'];
		
		$data['games']=$this->Adminmaster_model->selectData("game_master","*",array('userid'=>$userid),'id','ASC');
		
		$this->load->view('/profile/game_list',$data);
		
		
		
	}
	
	public function game($id){
		
		$userid=$this->session->userdata['user_session']['id'];
		$username=$this->session->userdata['user_session']['username'];
		
		$data['games']=$this->Adminmaster_model->selectData("game_master","*",array('userid'=>$userid,'id'=>$id));
		$data['comentry']=$this->Adminmaster_model->selectData("commentry","*",array('user_id'=>$userid,'gameid'=>$id),'id','DESC');
		
		$this->load->view('/profile/game_view',$data);
		
		
		
	}
}


?>
