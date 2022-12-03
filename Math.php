<?php
namespace App;

require_once "./Cours.php";


use Mouctar\Ousmane\Amadou\{Cours, Math as MathCours};

 class Math extends Cours
 {
     public function __construct()
     {
         parent::__construct("Math");
     }

     public function voir()
     {
         return $this->nom_cours();
     }
 }
 


 $cours = new Math();

 print_r($cours->voir());