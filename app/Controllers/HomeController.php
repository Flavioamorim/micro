<?php

namespace App\Controllers;

use Core\BaseController;
use PDO;
use PDOException;

class HomeController extends BaseController
{
    public function index()
    {
        $this->setPageTitle(" Homee ");
            $this->view->titulo = "Lista de programetes";
        // $id = 12;
        // try {
            
        //     // $conn = new PDO('mysql:host=69.162.72.173;dbname=central_new', 'root', 'uJ6tPzjDcrRWWJc'); // central
        //     // $conn = new PDO('mysql:host=69.162.72.170;dbname=construtor', 'root', 'winter'); // construtor
        //     $conn = new PDO('mysql:host=localhost;dbname=central', 'root', '');
        //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //     $stmt = $conn->prepare('SELECT * FROM clients WHERE id = :id');
        //     $stmt->execute(array('id' => $id));

        //     while ($row = $stmt->fetch()) {
        //         print_r($row);
        //     }
        // } catch (PDOException $e) {
        //     echo 'ERROR: ' . $e->getMessage();
        // }
        $this->henderView('home/index', 'layout');
    }
}
