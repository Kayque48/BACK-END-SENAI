<?php

// Relacinamento: Herança e Realizamento

    interface Local{
        public function Dever();
    }

    class Estrutura{
        private $heroi;
        
        public function __construct($heroi) {
            $this->setHeroi($heroi);
        }

        public function setHeroi($heroi) {
            $this->heroi = $heroi;
        }

        public function getHeroi() {
            return $this->heroi;
        }
    }

    class Cotil extends Estrutura implements Local{
        public function __construct($heroi) {
            parent:: __construct($heroi);
        }

        public function Dever(){
            echo "O {$this->getheroi()} está treinando no Cotil nesse momento\n";
        }
    }

    class Shopping extends Estrutura implements Local{
        public function __construct($heroi) {
            parent:: __construct($heroi);
        }

        public function Dever() {
            echo "O {$this->getHeroi()} após terminar seu treinamento no Cotil, está nesse momento, realizando Doação no Shopping.\n";
        }
    }

    $herois = [
        new Cotil('Batman'),
        new Cotil('Superman'),
        new Cotil('Homen-Aranha'),
        new Shopping('Batman'),
        new Shopping('Superman'),
        new Shopping('Homen-Aranha')
    ];

   foreach($herois as $heroi) {
        echo $heroi->Dever();
    }