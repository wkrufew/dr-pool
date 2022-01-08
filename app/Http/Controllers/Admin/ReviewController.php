<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:Ver Dashboard')->only('index');
    }
    
    public function index()
    {
        $reviews = Review::where('status', 1)->latest()->paginate(6);
        return view('admin.reviews.index', compact('reviews'));
    }

    public function estado(Review $review)
    {
        $review->status = 2;

        $review->save();

        $notificacion="La reseña ha sido aprobada correctamente";

        return redirect()->route('admin.reviews.index')->with(compact('notificacion'));
    }

    public function aprobada()
    {
        $reviews = Review::where('status', 2)->latest()->paginate(6);
        return view('admin.reviews.aprobada', compact('reviews'));
    }

    public function destroy(Review $review)
    {
        $review->delete();

        $notificacion="La reseña se ha eliminado correctamente";

        return redirect()->route('admin.reviews.index')->with(compact('notificacion'));
    }
}
