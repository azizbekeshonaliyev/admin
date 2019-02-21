<?php
/**
 * Created by PhpStorm.
 * User: Azizbek Eshonaliyev
 * Date: 2/15/2019
 * Time: 5:01 PM
 */

namespace Bek96\Admin\Http\Controllers;


use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dashboard(){
        return view('bek96::dashboard');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editors(){
        return view('bek96::editors');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function blank(){
        return view('bek96::blank');
    }
}