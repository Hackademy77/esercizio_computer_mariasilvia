<?


public function __construct (Ram $RAM, Rom $ROM, Cpu $CPU,SchedaVideo $SchedaVideo) {
    $this -> RAM = $RAM;
    $this -> ROM = $ROM;
    $this -> CPU = $CPU;
    
}

class PC {
    public $RAM;
    public $ROM;
    public $CPU;

class Ram {
    public function MemoriaIstantanea() {
        echo "memorizzo temporaneamente il file"
    }   
}

class rom {
    public function MemoriaPermanente() {
        echo "memorizzo nella memoria interna il file"
    }
}

class Cpu {
    public function Processore () {
        echo "controllo tutte le altre unità di elaborazione all'interno di un computer"
    }
}

public function memorizzaTemporaneamente(){
    $this -> RAM -> MemoriaIstantanea();
}

public function memorizzaPermanente(){
    $this -> ROM -> MemoriaPermanente();
}

public function processore(){
    $this -> CPU -> Processore(); 
}
}
