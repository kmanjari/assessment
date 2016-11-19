<?php

namespace App\Http\Controllers;

use App\Http\Requests\HotelRequest;
use App\Models\Hotel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $hotels = Hotel::paginate('20');
        return view('admin.index', compact('hotels'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(HotelRequest $request)
    {
        $data = $request->except('token');

        try
        {
            Hotel::create($data);
            \Session::flash('message', 'Hotel successfully Added!');
            return view('admin.create');
        }
        catch(\Exception $e)
        {
            \Session::flash('message', 'Something went wrong');
            return view('admin.create');
        }
    }
}
