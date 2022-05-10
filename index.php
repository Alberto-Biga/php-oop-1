<?php 

    //creazione classe
    class Movie {
        public $titolo;
        public $regista;
        public $genere;
        public $attorePrincipale;
        public $annoProduzione;
        public $costo;

        //imposto una funzione "costruttore"
        public function __construct($_titolo, $_regista, $_genere, $_attorePrincipale, $_annoProduzione, $_costo){
            $this -> titolo = $_titolo;
            $this -> regista = $_regista;
            $this -> genere = $_genere;
            $this -> attorePrincipale = $_attorePrincipale;
            $this -> annoProduzione = $_annoProduzione;
            $this -> costo = $_costo;            
        }

        //imposto funzione costo noleggio (noleggio base sara' 20, se film datato 15)
        public function setCosto ($annoProduzione){
            if($annoProduzione < 2017){
                $this -> costo = 15;
            }else{
                $this -> costo = 20;
            }
        }

        //imposto funzione di stampa per sconto
        public function getCosto(){
            return $this -> costo;
        } 
    }

    //istanzo i vari film
    $animaliFantastici = new Movie("Animali Fantastici - I Segreti di Silente ", "David Yates", "Avventura, Family, Fantasy", "Eddie Redmayne", 2022,"");
    $piratiDeiCaraibi = new Movie("Pirati dei Caraibi: Oltre i confini del mare", "Rob Marshall", "Avventura, Commedia, Fantasy", "Johnny Deep", 2011,"");

    //stampo a video
    echo $animaliFantastici -> titolo . "<br>";
    echo $animaliFantastici -> regista . "<br>";
    echo $animaliFantastici -> genere . "<br>";
    echo $animaliFantastici -> attorePrincipale . "<br>";
    echo $animaliFantastici -> annoProduzione . "<br>";
    //setto lo sconto
    $animaliFantastici -> setCosto(2022);
    //stampo lo sconto
    echo $animaliFantastici -> getCosto() . "<br><br><br>";

    echo $piratiDeiCaraibi -> titolo . "<br>";
    echo $piratiDeiCaraibi -> regista . "<br>";
    echo $piratiDeiCaraibi -> genere . "<br>";
    echo $piratiDeiCaraibi -> attorePrincipale . "<br>";
    echo $piratiDeiCaraibi -> annoProduzione . "<br>";
    //setto lo sconto
    $piratiDeiCaraibi -> setCosto(2011);
    //stampo lo sconto
    echo $piratiDeiCaraibi -> getCosto() . "<br>";

?>