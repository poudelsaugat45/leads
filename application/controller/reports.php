<?php
session_start();

class Reports extends Controller
{

  public function index()
  {

      require APP . 'view/_templates/header.php';
      require APP . 'view/_templates/sidebar.php';
      require APP . 'view/reports/index.php';
      require APP . 'view/_templates/footer.php';
  }
  public function activelead() {

    $leads = $this->model->getActiveLeads();

    require APP . 'view/_templates/header.php';
    require APP . 'view/_templates/sidebar.php';
    require APP . 'view/reports/activelead.php';
    require APP . 'view/_templates/footer.php';
  }

  public function counsellor() {

    require APP . 'view/_templates/header.php';
    require APP . 'view/_templates/sidebar.php';
    require APP . 'view/reports/counsellor.php';
    require APP . 'view/_templates/footer.php';
  }

public function counsellorReport() {
  if (isset($_POST["done"])) {

    $leads= $this->model->counsellor($_POST["c_name"]);
  }
  require APP . 'view/_templates/header.php';
  require APP . 'view/_templates/sidebar.php';
  require APP . 'view/reports/counsellor.php';
  require APP . 'view/_templates/footer.php';
  }

  public function customized() {

    require APP . 'view/_templates/header.php';
    require APP . 'view/_templates/sidebar.php';
    require APP . 'view/reports/customized.php';
    require APP . 'view/_templates/footer.php';
  }

  public function customizedReport() {

    if (isset($_POST["done"])) {

      $leads= $this->model->customized($_POST["c_name"], $_POST["semester"]);
    }

    require APP . 'view/_templates/header.php';
    require APP . 'view/_templates/sidebar.php';
    require APP . 'view/reports/customized.php';
    require APP . 'view/_templates/footer.php';
  }


  public function getCname()
  {
      if (isset($_POST["get_cname"])) {
        //print_r($_POST); exit;
        $this->model->getCounsellorRep($_POST["l_name"]);
      }

      header('location: ' . URL . 'leads/view');
  }
  public function status() {

    $leads = $this->model->getActiveLeads();

    require APP . 'view/_templates/header.php';
    require APP . 'view/_templates/sidebar.php';
    require APP . 'view/reports/status.php';
    require APP . 'view/_templates/footer.php';
  }
}
