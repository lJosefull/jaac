<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminEducationController extends CBController {


    public function cbInit()
    {
        $this->setTable("education");
        $this->setPermalink("education");
        $this->setPageTitle("Education");

        $this->addText("Name","name")->strLimit(150)->maxLength(255);
		

    }
}
