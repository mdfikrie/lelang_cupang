<?php

namespace App\Http\Livewire;
use App\Models\User;
use App\Models\Chat;
use Livewire\Component;

class Chats extends Component
{
    public $sender;
    public $message;
    public $allMessage;
    public $search;
    public function render()
    {
        if($this->search === null){
            $user = User::where('role','user')->orderBy('username','asc')->get();
        }else{
            $user = User::where('role','user')->where('username','like','%'.$this->search.'%')->orderBy('username','asc')->get();
        }
        $sender = $this->sender;
        $this->allMessage ;
        return view('livewire.chats',compact('user','sender'));
    }
    public function resetForm(){
        $this->message = "";
    }
    public function mountdata(){
        if(isset($this->sender->id)){
            $this->allMessage = Chat::where('user_id',auth()->user()->id)->where('penerima_id',$this->sender->id)->orWhere('user_id',$this->sender->id)->where('penerima_id',auth()->user()->id)->orderBy('id','desc')->get();

            $not_seen = Chat::where('user_id',$this->sender->id)->where('penerima_id',auth()->user()->id)->where('is_seen',false);
            $not_seen->update(['is_seen'=>true]);
        }
    }
    public function SendMessage(){
        Chat::create([
            'user_id' => auth()->user()->id,
            'penerima_id' => $this->sender->id,
            'text' => $this->message,
            'is_seen' => false,
        ]);
         $this->resetForm();
    }
    public function getUser($userId){
        $user = User::find($userId);
        $this->sender = $user;
        $this->allMessage = Chat::where('user_id',auth()->user()->id)->where('penerima_id',$userId)->orWhere('user_id',$userId)->where('penerima_id',auth()->user()->id)->orderBy('id','desc')->get();
    }
    
}
