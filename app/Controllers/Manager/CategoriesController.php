<?php

namespace App\Controllers\Manager;

use App\Controllers\BaseController;
use app\Services\CategoryService;
use CodeIgniter\Config\Factories;

use function PHPUnit\Framework\returnSelf;

class CategoriesController extends BaseController
{

  private $categoryService;

  public function __construct()
  {
    $this->categoryService = Factories::class(CategoryService::class); 
  }

  public function index()
  {
    $data = [
      'title' => 'Categorias'
    ];

    return view('Manager/Categories/index', $data);
  }


  public function getAllCategories()
  {
    if (!$this->request->isAJAX()) {
      return redirect()->back();
    }

    $response = [];
    
    $response = [
      'data' => $this->categoryService->getAllCategories()
    ];


   return $this->response->setJSON(['data' => $this->categoryService->getAllCategories()]);
   

   
  }
}
