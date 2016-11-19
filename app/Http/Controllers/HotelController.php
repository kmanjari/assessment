<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * show all the posted comments for a hotel
     */
    public function show($id)
    {
        $hotels = Hotel::with('comments.user')->findOrFail($id);
/*        $hotels = json_decode(json_encode($hotel), true);*/

        return view('hotel.detail', compact('hotels'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * show the page for a new comment
     */
    public function showComment($id)
    {
        $hotel = Hotel::findOrFail($id);

        return view('hotel.comment', compact('hotel'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * process the new comment
     */
    public function postComment(Request $request, $id)
    {
        try
        {
            $comment = new Comment();
            $comment->comment = $request->comment;
            $comment->hotel_id = $id;
            $comment->user_id = \Auth::user()->id;
            $comment->save();

            \Session::flash('message', 'Comment successfully Posted!');
            return view('hotel.comment');
        }
        catch(\Exception $e)
        {
            \Session::flash('message', 'Something went wrong');
            return redirect()->back();
        }
    }
}
