<?php namespace App\Modules\ModuleOne\Models;
use Illuminate\Database\Eloquent\Model;
class TestModel extends Model
{
	public function getAny()
	{
		return 'Module one data';
	}
}