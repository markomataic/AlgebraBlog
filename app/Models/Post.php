<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	/**
	*the attributes that are mass assignable
	*
	*@var array
	*/
	
    protected $fillable = ['user_id', 'title', 'content'];
	
	/**
	 *The Eloquent users model name
	 *
	 *@var string 
	 */	
	 protected static $usersModel = 'App\Models\Users';
	 
	 /**
	 *The Eloquent comments model name
	 *
	 *@var string 
	 */	
	 
	 protected static $commentsModel = 'App\Models\Comment';
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
	 *@return \Illuminate\Database\Eloquent\Relations\HasMany
	 */

	public function comments()
	{
		return $this->hasMany(static::$commentsModel,'post_id');
	}	
	/**
	 *save Post
	 *@param array $post
	 *
	 *@return void
	 */
	 public function savePost($post=array())
	 {
		 return $this->fill($post)->save();
	 }
	 /**
	 *update Post
	 *@param array $post
	 *
	 *@return void
	 */
	 public function updatePost($post=array())
	 {
		 return $this->update($post);
	 }
	 
	 
	 
	 
}
