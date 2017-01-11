<?php

namespace CodeDelivery\Http\Controllers;

use Illuminate\Http\Request;
use CodeDelivery\Repositories\ProductRepository;
use CodeDelivery\Http\Requests;
use CodeDelivery\Http\Requests\AdminProductRequest;
use CodeDelivery\Http\Controllers\Controller;

class ProductsController extends Controller
{
	private $repository;
	public function __construct(ProductRepository $repository){
		$this->repository = $repository;
	}
    public function index(){

    	$products = $this->repository->paginate();
    	return view('admin.products.index',compact('products'));
    }
    public function create(){
    	return view('admin.products.create',compact('products'));
    }
    public function store(AdminProductRequest $request){
     	$data = $request->all();
     	$this->repository->create($data);
     	return redirect()->route('admin.products.index');	
    }
    public function edit($id){
    	$product = $this->repository->find($id);
    	return view('admin.products.edit',compact('product'));	
    }
    public function update(AdminproductRequest $request,$id){
    	$data = $request->all();
     	$this->repository->update($data,$id);
     	return redirect()->route('admin.products.index');	
    }
     public function delete($id){
    	$product = $this->repository->delete($id);
    	return redirect()->route('admin.products.index');	
    }
}
