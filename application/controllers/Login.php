<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
  function __construct()
  {
      parent::__construct();
      $this->load->model("Admin_model");
      $this->load->library("form_validation");
  }
  private function rules(){
    return [
      [
        'field'=>"email",
        "label"=>"email",
        "rules"=>"required"
      ],
      [
        "field"=>"password",
        "label"=>"password",
        "rules"=>"required"
      ]
    ];
  }

  function index(){
    $email = $this->input->post("email");
    $password = $this->input->post("password");

    $data = ['email'=>$email,"password"=>$password];

    if($this->input->post()){
      if($this->form_validation->set_rules($this->rules())->run()){
        $ses=[
          'email'=>$email,
          "status"=>"login"
        ];

        if($this->Admin_model->login("user",$data)->num_rows()>0){
          $this->session->set_userdata($ses);
          header("location:".base_url("Admin/Dashboard"));
        }else {
          $this->session->set_flashdata("gagal_login","Anda gagal login, silahkan cek email dan password anda kembali");
          redirect(base_url("login"));
        }
      }
    }
    $this->load->view("Admin/login");
  }

  function lupa(){
    $this->load->view('Admin/forgot_password');
  }

  private function sendEmail($token, $type)
	{
    $config = Array(
      'protocol' => 'smtp',
      'smtp_host' => 'smtp.mailtrap.io',
      'smtp_port' => 2525,
      'smtp_user' => '1125ffcf480bd8',
      'smtp_pass' => '5fc1d5ddbcaa94',
      'mailtype' => 'html',
      'charset' => 'utf-8',
      'crlf' => "\r\n",
      'newline' => "\r\n"
    );
		// $config = [
		// 'protocol' => 'smtp',
		// 'smtp_host' => 'ssl://smtp.googlemail.com',
		// 'smtp_user' => 'rahmatdanisyw@gmail.com',
		// 'smtp_pass' => 'qwerty2699', 
		// 'smtp_port' => 465,
		// 'mailtype' => 'html',
		// 'charset' => 'utf-8',
		// 'newline' => "\r\n"
		// ];
		
		$this->email->initialize($config);
		$this->email->from('Admin Sistem', 'JDIh');
		$this->email->to($this->input->post('email'));
		
		if ($type == 'verify') {
		$this->email->subject('Account Verification');
		$this->email->message('Click this link to verify you account : <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>');
		} else if ($type == 'forgot') {
		$this->email->subject('Reset Password');
		$this->email->message('Click this link to reset your password : <a href="' . base_url() . 'Login/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');
		}
		
		if ($this->email->send()) {
		return true;
		} else {
		echo $this->email->print_debugger();
		die;
		}
  }
  
  public function forgotPassword() {
		$this->form_validation->set_rules('email','Email', 'trim|required|valid_email');
		
		if($this->form_validation->run() == false) {
			// $data['title'] = 'Forgot Password';
			// $this->load->view('_templates/auth_header', $data);
			$this->load->view('Admin/forgot_password');
			// $this->load->view('_templates/auth_footer');
		} else {
			$email = $this->input->post('email');
			$user = $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array();
			if($user) {
				$token = base64_encode(random_bytes(32));
				$user_token = [
				'email' => $email,
				'token' => $token,
				'date_created' => time()
			];
			
			$this->db->insert('user_token', $user_token);
			$this->sendEmail($token, 'forgot');
			
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Please check your email to reset your password!</div');
			
			redirect('login/lupa');				
			} else {
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email is not registered or activated!</div>');
				redirect('login/lupa');
			}
		}
  }
  
  public function resetPassword() {
		$email = $this->input->get('email');
		$token = $this->input->get('token');
		
	$user = $this->db->get_where('user', ['email' => $email])->row_array();
	
	if($user) {
		$user_token = $this->db->get_where('user_token', ['token'=>$token])->row_array();
		if($user_token) {
			$this->session->set_userdata('reset_email', $email);
			$this->changePassword();
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password failed! Wrong token.</div>');
			redirect('login');
		}
	} else {
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password failed! Wrong email.</div>');
			redirect('login');
	}
  }
  
  public function changePassword(){
		if (!$this->session->userdata('reset_email')) {
			redirect('login');
		}
		$this->form_validation->set_rules('password1','Password', 'trim|required|min_length[3]|matches[password1]');
		if ($this->form_validation->run()==false){
			$data['title'] = 'Change Password';
			// $this->load->view('_templates/auth_header', $data);
			$this->load->view('Admin/change-password');
			// $this->load->view('_templates/auth_footer');
		} else {
			$password = md5($this->input->post('password1'));
			$email = $this->session->userdata('reset_email');
			
			$this->db->set('password', $password);
			$this->db->where('email', $email);
			$this->db->update('user');
			
			$this->session->unset_userdata('reset_email');
			
		$this->db->delete('user_token', ['email' => $email]);
		
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password has been changed! Please login</div>');
			redirect('login');
		}
	}


}

 ?>
