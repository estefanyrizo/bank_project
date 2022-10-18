<?php

    namespace App\models;
    use CodeIgniter\Model;
    Class cliente_db extends Model
    {
        protected $entidad = 'Cliente';
        public function leerCliente ()
        {
            return $this->findAll();
        }
    }