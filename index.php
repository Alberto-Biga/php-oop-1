<?php 

    //creazione classe
    class Movie {
        public $titolo;
        public $regista;
        public $attorePrincipale;
        public $annoProduzione;
        public $costo;

        //imposto una funzione "costruttore"
        public function __construct($_titolo, $_regista, $_attorePrincipale, $_annoProduzione, $_costo){
            $this -> titolo = $_titolo;
            $this -> regista = $_regista;
            $this -> attorePrincipale = $_attorePrincipale;
            $this -> annoProduzione = $_annoProduzione;
            $this -> costo = $_costo;            
        }

        //imposto funzione costo noleggio (noleggio base sara' 20, se film datato 15)
        public function setSconto ($annoProduzione){
            if($annoProduzione < 2017){
                $this -> costo = 15;
            }
        }

        //imposto funzione di stampa per sconto
        public function getSconto(){
            return $this -> sconto;
        } 
    }

?>