<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_status extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'description' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        )
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('status');
        }

        public function down()
        {
                $this->dbforge->drop_table('status');
        }
}