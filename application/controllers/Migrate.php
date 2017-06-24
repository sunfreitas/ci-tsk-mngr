<?php

class Migrate extends CI_Controller
{	
		function __construct(){
			parent::__construct();
			$this->load->library('migration');
		}


        public function index()
        {
            if ($this->migration->current() === FALSE)
            {
                show_error($this->migration->error_string());
            }

            $this->load->view('migration', ['latest' => $this->migration->latest()] );
        }

        /**
         * Inicie por aqui
         */
        public function latest()
        {
        	if ( $this->migration->latest() === FALSE ) {
        		show_error( $this->migration->error_string() );
        	}

        	$this->load->view('migration', ['latest' => $this->migration->latest()] );
        }

        public function rollback($version='')
        {
        	if ( $this->migration->version($version) === FALSE ) {
        		show_error( $this->migration->error_string() );
        	}
        	$this->load->view('rollback', ['rollback' => $version] );
        }

        public function migrations()
        {
        	$this->load->view('migrations', ['migrations' => $this->migration->find_migrations()] );
        }

}