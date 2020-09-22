<?php

namespace App\Controller;

use App\Controller\AppController;



class UserController extends AppController{

	

	public function initialize(){              
		parent::initialize();
		$this->viewBuilder()->setLayout('userlayout');
		$this->loadModel("Users");

	}
	
	public function index(){

		$users = $this->Users->find();
		$this->set("title","UserInfo");
		$this->set(compact("users"));
		
	}
	public function insert(){ 


		
	}
	public function edit($id=''){

		$user = $this->Users->get($id);
		$this->set(compact("user"));

		
	}
	public function delete($id=''){ 

		$user = $this->Users->get($id);
		$this->Users->delete($user);

		$this->redirect(["action"=>"index"]);
		
	}

	public function save(){ 
		$this->autoRender = false;

		$data = $this->request->data;

		
		$user = $this->Users->newEntity();

		$user->name = $data['name'];
		$user->email = $data['email'];
		$user->address = $data['address'];
		$user->phone = $data['phn']; 
		$this->Users->save($user);

		$this->redirect(["action"=>"index"]);

		
	}

	public function update(){ 
		$this->autoRender = false;

		$data = $this->request->data;
		
		$user = $this->Users->get($data['seq']);

		$user->name = $data['name'];
		$user->email = $data['email'];
		$user->address = $data['address'];
		$user->phone = $data['phn']; 
		$this->Users->save($user);

		$this->redirect(["action"=>"index"]);

		
	}



}

?>