<?php

namespace CodeDelivery\Http\Controllers;

use Illuminate\Http\Request;
use CodeDelivery\Repositories\ClientRepository;
use CodeDelivery\Repositories\UserRepository;
use CodeDelivery\Http\Requests;
use CodeDelivery\Http\Requests\AdminClientRequest;
use CodeDelivery\Http\Controllers\Controller;

class ClientsController extends Controller
{
	private $repository;
	public function __construct(ClientRepository $repository, UserRepository $userRepository){
		$this->repository = $repository;
        $this->userRepository = $userRepository;
	}
    public function index(){

    	$clients = $this->repository->paginate();
    	return view('admin.clients.index',compact('clients'));
    }
    public function create(){
       
    	return view('admin.clients.create',compact('clients'));
    }
    public function store(AdminClientRequest $request){
     	$data = $request->all();
        $res = $this->userRepository->create($data);
        $data['user_id'] = $res->id; /* VALIDAR METODO */
     	$this->repository->create($data);

     	return redirect()->route('admin.clients.index');	
    }
    public function edit($id){
    	$client = $this->repository->find($id);
        $client->name = $client->user->name; /* VALIDAR METODO */
        $client->email = $client->user->email; /* VALIDAR METODO */

    	return view('admin.clients.edit',compact('client'));	
    }
    public function update(AdminClientRequest $request,$id){
    	$data = $request->all();
     	$this->repository->update($data,$id);
        $this->userRepository->update($data,$data['user_id']);/* VALIDAR METODO */
     	return redirect()->route('admin.clients.index');	
    }
     public function delete( $id){
        $data = $this->repository->find($id);
    	$client = $this->repository->delete($id);
        $user = $this->userRepository->delete($data->user_id);
       
    	return redirect()->route('admin.clients.index');	
    }
}
