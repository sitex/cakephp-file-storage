<?php
class InitialFileStorageMigration extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'down' => array(
			'drop_table' => array(
				'file_storage'
			),
		),
		'up' => array(
			'create_table' => array(
				'file_storage' => array(
					'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
					'user_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 36),
					'foreign_key' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 36),
					'model' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 64),
					'filename' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'filesize' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 16),
					'mime_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 32),
					'extension' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 5),
					'hash' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 64),
					'path' => array('type' => 'string', 'null' => false, 'default' => NULL),
					'adapter' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 32, 'comment' => 'Gaufrette Storage Adapter Class'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1)
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
			),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		return true;
	}

}