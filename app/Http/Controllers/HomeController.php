<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use Auth;
use DataTables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
       // $data = Product::With('User')->where('user_id',Auth::user()->id)->get();

        if ($request->ajax()) {
            $data = Product::With('User')->where('user_id',Auth::user()->id)->get();
            return Datatables::of($data)
            ->addIndexColumn()

            ->make(true);
}

        return view('home');
    }
}
