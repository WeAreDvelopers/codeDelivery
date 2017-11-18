<?php

namespace CodeDelivery\Http\Controllers\Api\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use CodeDelivery\Repositories\OrderRepository;
use CodeDelivery\Repositories\UserRepository;
use CodeDelivery\Repositories\ProductRepository;
use CodeDelivery\Http\Requests;
use CodeDelivery\Http\Controllers\Controller;
use CodeDelivery\Services\OrderService;
use Authorizer;
class ClientCheckoutController extends Controller
{
	private $repository;
	public function __construct(
        OrderRepository $repository, 
        UserRepository $userRepository,
        ProductRepository $productRepository,
        OrderService $orderService    
        ){
        $this->repository = $repository;
        $this->userRepository = $userRepository;
		$this->productRepository = $productRepository;
        $this->service = $orderService;
	}
    public function index(){
        $id = Authorizer::getResourceOwnerId();
        $clientId = $this->userRepository->find($id)->client->id;
        $orders = $this->repository->with(['items'])->scopeQuery(function($query) use ($clientId){
            return $query->where('client_id','=',$clientId);
        })->paginate();
        return $orders;
    }

    public function store(Request $request){
       $data = $request->all();
        $id = Authorizer::getResourceOwnerId();
        $clientId = $this->userRepository->find($id)->client->id;
        $data['client_id'] = $clientId;
        $orderObj = $this->service->create($data);

       return $this->repository
           
            ->with('items')
            ->find($orderObj->id);
    }
    public function show($id){
        $o = $this->repository->with(['client','items','cupom'])->find($id);
        $o->items->each(function($item){
            $item->product;
        });
        return $o;
    }
}
