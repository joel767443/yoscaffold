<?php

namespace Yoweli\YoScaffold\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class YoScaffoldController
 * @package Yoweli\YoScaffold\Http\Controllers
 */
class YoScaffoldController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        return view('YoScaffold::index');
    }
}
