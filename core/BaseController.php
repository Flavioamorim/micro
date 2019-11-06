<?php

namespace Core;

use stdClass;

abstract class BaseController
{
    protected $view;
    private $viewPath;
    private $layoutPath;
    private $pageTitle = null;

    public function __construct()
    {
        $this->view = new stdClass;    
    }

    protected function henderView($viewPath, $layoutPath = null)
    {
        $this->viewPath = $viewPath;
        $this->layoutPath = $layoutPath;
        if($layoutPath) {
            $this->layout();
        }else{
            $this->content();
        }
    }
    
    /**
     *
     * @return void
     */
    protected function content()
    {
        if(file_exists(__DIR__ . "/../app/Views/{$this->viewPath}.phtml")){
            require_once __DIR__ . "/../app/Views/{$this->viewPath}.phtml";
        }else{
            echo "Error: View path not found!";
        }
    }
    
    /**
     *
     * @return void
     */
    protected function layout()
    {
        if (file_exists(__DIR__ . "/../app/Views/{$this->layoutPath}.phtml")) {
            require_once __DIR__ . "/../app/Views/{$this->layoutPath}.phtml";
        } else {
            echo "Error: View layout path not found!";
        }
    }

    protected function setPageTitle($title)
    {
        $this->pageTitle = $title;
    }

    protected function getPageTitle($separator = null)
    {
        if($separator) {
            echo $this->pageTitle . " " . $separator . " ";
        } else {
            echo $this->pageTitle;
        }
    }
}
