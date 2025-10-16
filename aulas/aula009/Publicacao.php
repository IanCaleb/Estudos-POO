<?php 

interface Publicacao{
    public function abrir();
    public function fechar();
    public function folear();
    public function avancarPag();
    public function voltarPag();
    public function abrirPagina($pagina);
}
?>