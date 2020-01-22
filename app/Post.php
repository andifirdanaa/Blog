<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $fillable = ['tittle','content','slug','image','user_id'];
	protected $dates = ['created_at'];
	
    public function user(){
    	return $this->belongsTo(User::class);
    }
    public function thumbnail(){
    	// if($this->thumbnail){
    	// 	return $this->thumbnail;
    	// }else{
    	// 	return asset('/images/no-thumbnail.jpg');
    	// }
    	if(!$this->image){
    		return asset('/images/no-thumbnail.jpg');
    	}
    		return $this->image;
    }
}
