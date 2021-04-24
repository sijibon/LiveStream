<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\ChannelManage;
class ChannelManageController extends Controller
{
  public function create()
  {
    return view('backend.pages.channel_manage');
  }
}
