<?php
    class imovel {
        private $categoria;
        private $n_comodos;
        private $valor;
        private $estado_conservacao;

        public function __construct($categoria, $n_comodos, $valor, $estado_conservacao) {
            $this->categoria = $categoria;
            $this->n_comodos = $n_comodos;
            $this->valor = $valor;
            $this->estado_conservacao = $estado_conservacao

        }
    }

class casa extends imovel {
    private $tem_quintal;

    public function __construct($categoria, $n_comodos, $valor, $estado_conservacao, $tem_quintal) {
        parent::__construct($categoria, $n_comodos, $valor, $estado_conservacao);

        $this->tem_quintal  = $tem_quintal;
    }
}

class Apartamento extends imovel {
    private $andar;

    public function __construct($categoria, $n_comodos, $valor, $estado_conservacao, $tem_quintal, $andar) {
        parent::__construct($categoria, $n_comodos, $valor, $estado_conservacao);

        $this->andar    = $andar;
    }
}

class Escola extends imovel {
    private $seguimento;
    
    public function __construct($categoria, $n_comodos, $valor, $estado_conservacao, $seguimento) {
        parent::__construct($categoria, $n_comodos, $valor, $estado_conservacao);

        $this->seguimento = $seguimento;  
    }
}   
?>