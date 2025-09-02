<?php

namespace App\Http\Controllers;

use App\Models\Magazine;
use Illuminate\Http\Request;

class MagazineController extends Controller
{
   public function index(Request $request)
    {

        $magazines = Magazine::query()

            ->orderBy('publish_date', 'desc')
            ->paginate(10); // You can change the pagination value if needed

        return view('explore.magazines.index', compact('magazines'));
    }
}
