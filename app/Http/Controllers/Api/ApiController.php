<?php

namespace CodeDelivery\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use CodeDelivery\Repositories\UserRepository;

use CodeDelivery\Http\Requests;
use CodeDelivery\Http\Controllers\Controller;
use Authorizer;
class ApiController extends Controller
{
	private $repository;
	public function __construct(
       
        UserRepository $userRepository   
        ){
        $this->userRepository = $userRepository;
	}
    public function authenticated(Request $request){
        $id = Authorizer::getResourceOwnerId();
        $client = $this->userRepository->find($id);
        return $client;
    }
}
