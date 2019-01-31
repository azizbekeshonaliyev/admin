<?php
/**
 * Created by PhpStorm.
 * User: Azizbek Eshonaliyev
 * Date: 1/31/2019
 * Time: 3:55 PM
 */

namespace Bek96\Admin\Http\Controllers;


use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function loginPage(){
        return view('admin::login');
    }
}