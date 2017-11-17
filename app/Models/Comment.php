<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
	*the attributes that are mass assignable
	*
	*@var array
	*/
	
    protected $fillable = ['user_id', 'post_id', 'content'];
	
	/**
	 *The Eloquent users model name
	 *
	 *@var string 
	 */	
	 protected static $usersModel = 'App\Models\Users';
	 
	 /**
	 *The Eloquent posts model name
	 *
	 *@var string 
	 */	
	 
	 protected static $postsModel = 'App\Models\Post';
	 /**
	 *Returns The users relationship
	 *
	 *@return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */

	public function User()
	{
		return $this->belongsTo(static::$usersModel,'user_id');
	}	
	
	/**
	 *Returns The posts relationship
	 *
	 *@return \Illuminate\Database\Eloquent\Relations\belongsTo
	 */

	public function post()
	{
		return $this->belongsTo(static::$postsModel,'post_id');
	}	
	/**
	 *save Comment
	 *@param array $comment
	 *
	 *@return void
	 */
	 public function saveComment($comment=array())
	 {
		 return $this->fill($comment)->save();
	 }
	 /**
	 *update comment
	 *@param array $comment
	 *
	 *@return void
	 */
	 public function updateComment($comment=array())
	 {
		 return $this->update($comment);
	 }
}
