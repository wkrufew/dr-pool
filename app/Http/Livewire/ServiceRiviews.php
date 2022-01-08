<?php

namespace App\Http\Livewire;

use App\Models\Review;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

use Livewire\WithPagination;

class ServiceRiviews extends Component
{
    use WithPagination;

    public $service_id, $comment;

    public $rating = 5;

    protected $rules = [
        'comment'=> 'required|min:10'
    ];

    public function mount(Service $service)
    {
        $this->service_id = $service->id;
    }

    public function render()
    {
        $service = Service::find($this->service_id);

        $comentarios = $service->reviews()->latest()->paginate(2);
        
        return view('livewire.service-riviews', compact('service','comentarios'));
    }

    public function store()
    {
        $service = Service::find($this->service_id);

        if (Auth::check()) { 
            $this->validate();
            $service->reviews()->create([
                'comment' => $this->comment,
                'rating' => $this->rating,
                'user_id' => auth()->user()->id
            ]);
            $this->reset('comment', 'rating');
        }else{
            $this->emit('login-modal');
        } 
        
    }

    public function destroy(Review $review)
    {
        $review->delete();
    }
}
