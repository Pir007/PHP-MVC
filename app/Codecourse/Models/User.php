<?php
namespace Codecourse\Models;

use Codecourse\Library\Model;

class User extends Model
{
	protected $table = 'users';
	protected $primaryKey = 'id';
	
	function __construct()
	{
		parent::__construct(HOST, USER, PASS, DB);
	}
}