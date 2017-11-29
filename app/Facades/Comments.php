<?php 

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Comments extends Facade{
	
	protected static function getFacadeAccessor()
	{
		return 'comments';
	}
}

