<?php
App::uses('AppModel', 'Model');
/**
 * ClubOperatingHour Model
 *
 * @property Club $Club
 */
class ClubOperatingHour extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Club' => array(
			'className' => 'Club',
			'foreignKey' => 'club_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
