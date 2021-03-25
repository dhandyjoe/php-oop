<?php 

/* 
    Kewword final digunakan untuk menandakan bahwa class tersebut
    tidak bisa diturunkan lagi.
*/

class Soccer {

    public string $name;


    // Final Function berrarti tidak bisa di override lagi di child classnya
    final public function rate() {}
}

final class Juventus extends Soccer { 

    // error
    // public function rate() {}

}

// error
// class Player extends Juventus {
    
// }


?>