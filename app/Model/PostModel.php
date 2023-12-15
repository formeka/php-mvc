<?php
namespace App\Model;

// use App\Weblitzer\Model;
use App\Weblitzer\Model as ModelMVC; //alias

// class UserModel extends \App\Weblitzer\Model 
// class PostModel extends Model
class PostModel extends ModelMVC 
{
    protected static $table = 'post';

	
}