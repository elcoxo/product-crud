<?php

namespace App\Http\Controllers\Products\Admin;

use App\Http\Controllers\Products\BaseController as GuestBaseController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

abstract class BaseController extends GuestBaseController
{
    /**
     * BaseController constructor
     */
    public function __construct()
    {

    }
}
