<?php 
interface Controladora{
    public function temEnergia();

    public function ligar();
    public function desligar();
    public function power();

    public function maisVolume();
    public function menosVolume();

    public function ligarMudo();
    public function desligarMudo();
    public function mudo();

    public function play();
    public function pause();
    public function reproduzir();
}
?>