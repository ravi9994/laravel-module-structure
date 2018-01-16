<?php namespace App\Modules\ModuleOne\Controllers;
use App\Http\Controllers\Controller;
use App\Modules\ModuleOne\Models\TestModel;
/**
 * ModuleOneController
 *
 */
class ModuleOneController extends Controller
{
	function __construct( TestModel $testModel )
	{
		$this->testModel = $testModel;
	}
	public function index()
	{
		return view('ModuleOne::dummy');
	}
	public function modelTest()
	{
		return $this->testModel->getAny();
	}
}