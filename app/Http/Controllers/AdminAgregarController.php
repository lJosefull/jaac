<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminAgregarController extends CBController {


    public function cbInit()
    {
        $this->setTable("education_types");
        $this->setPermalink("agregar");
        $this->setPageTitle("Agregar");

        $this->addSelectTable("Education","education_id",["table"=>"education","value_option"=>"id","display_option"=>"name","sql_condition"=>""]);
		$this->addText("Name","name")->strLimit(150)->maxLength(255);
		

    }
}
