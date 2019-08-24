<?php
namespace ctrl\index;
use houphp\Controller\IController,
    houphp\Core\Config,
    houphp\View;
use houphp\Protocol\Request;

class index implements IController
{

    public function _before()
    {
        return true;
    }

    public function _after()
    {
        //
    }

    public function index()
    {
        $project = Config::getField('project', 'name', 'houphp');
        $data = $project." runing!\n";
        $params = Request::getParams();
        if(!empty($params)) {
            foreach($params as $key=>$val) {
                $data.= "key:{$key}=>{$val}\n";
            }
        }
        return $data;
    }
}

