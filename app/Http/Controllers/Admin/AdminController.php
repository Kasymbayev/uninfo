<?php
/**
 * Created by PhpStorm.
 * User: Kassymbayev
 * Date: 20.10.2019
 * Time: 23:49
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class AdminController extends Controller
{

    public function index(){return view('admin.index');}

    public function universities(){return view('admin.universities');}

}