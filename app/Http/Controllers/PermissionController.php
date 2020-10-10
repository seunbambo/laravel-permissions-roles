<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Http\Resources\PermissionResource;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function indexx()
    {
        return PermissionResource::collection(Permission::all());
    }
}
