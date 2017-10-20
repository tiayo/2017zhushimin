<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Services\Home\IndexService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    protected $index;

    public function __construct(IndexService $index)
    {
        $this->index = $index;
    }

    public function index()
    {
        //商品
        $commodities = $this->index->getByType(0, 6);

        //顶级栏目
        $parent_ctegory = $this->index->getCategoryParent();

        return view('home.index.index', [
            'commodities' => $commodities,
            'parent_ctegory' => $parent_ctegory,
        ]);
    }

    public function search(Request $request)
    {
        $keyword = $request->get('keyword');

        $commodities = $this->index->getSearch($keyword);

        return view('home.index.search', [
            'commodities' => $commodities,
        ]);
    }
}