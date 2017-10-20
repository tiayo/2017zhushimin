<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Repositories\CommodityRepository;
use App\Services\Home\IndexService;
use App\Services\Manage\CategoryService;

class ListController extends Controller
{
    protected $commodity, $category, $index;

    public function __construct(CommodityRepository $commodity, CategoryService $category, IndexService $index)
    {
        $this->commodity = $commodity;
        $this->category = $category;
        $this->index = $index;
    }

    public function view($category_id)
    {
        return view('home.list.list', [
            'category_id' => $category_id,
        ]);
    }
}