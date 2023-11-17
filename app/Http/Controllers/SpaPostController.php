<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpaRequest;
use App\Models\ToDegustation;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SpaPostController extends Controller
{
    public function __invoke(SpaRequest $request) {
        $data = $request->validated();
        ToDegustation::updateOrCreate($data);
    }
}
