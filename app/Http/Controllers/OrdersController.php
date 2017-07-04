<?php

namespace CodeDelivery\Http\Controllers;

use Illuminate\Http\Request;
use CodeDelivery\Repositories\OrderRepository;
use CodeDelivery\Repositories\OrderItemRepository;
use CodeDelivery\Repositories\CategoryRepository;
use CodeDelivery\Repositories\UserRepository;
use CodeDelivery\Http\Requests;
use CodeDelivery\Http\Requests\AdminProductRequest;
use CodeDelivery\Http\Controllers\Controller;

class OrdersController extends Controller
{
	private $repository;
	public function __construct(OrderRepository $repository,CategoryRepository $categoryRepository){
		$this->repository = $repository;
        $this->categoryRepository = $categoryRepository;
       
	}
    public function index(){
        $list_status = [0 => 'Iniciado',1 => 'Aguardando Pagamento',2 => 'Cancelado',3 => 'Pago',4 => 'A Caminho',5 => 'Devolvida',6 => 'Entregue'];
    	$orders = $this->repository->paginate();
       
    	return view('admin.orders.index',compact('orders','list_status'));
    }
    public function create(){
        $categories = $this->categoryRepository->lists('name','id');
    	return view('admin.orders.create',compact('orders','categories'));
    }
    public function store(AdminProductRequest $request){
     	$data = $request->all();
     	$this->repository->create($data);
     	return redirect()->route('admin.orders.index');	
    }
    public function edit($id, UserRepository $userRepository ){
        $list_status = [0 => 'Iniciado',1 => 'Aguardando Pagamento',2 => 'Cancelado',3 => 'Pago',4 => 'A Caminho',5 => 'Devolvida',6 => 'Entregue'];
    	$order = $this->repository->find($id);
       
        $categories = $this->categoryRepository->lists('name','id');
        $deliveryman = $userRepository->getDeliveryman();
    	return view('admin.orders.edit',compact('order','categories','deliveryman','list_status'));	
    }
    public function update(Request $request,$id){
    	$data = $request->all();
     	$this->repository->update($data,$id);
     	return redirect()->route('admin.orders.index');
    }
     public function delete($id){
    	$order = $this->repository->delete($id);
    	return redirect()->route('admin.orders.index');	
    }
}
