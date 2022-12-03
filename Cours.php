<?php

    namespace Mouctar\Ousmane\Amadou;

    class Cours
    {
        private $nomDuCours;

        public function __construct($nom)
        {
            $this->nomDuCours = $nom;
        }

        protected function nom_cours()
        {
            return $this->nomDuCours;
        }

        
    }


    class Math extends Cours
 {
     public function __construct()
     {
         parent::__construct("Math");
     }

     public function voir()
     {
         return $this->nom_cours(). ' depuis le fichier Cours';
     }
 }
 

    