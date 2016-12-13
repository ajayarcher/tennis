<?php
App::uses('AppModel', 'Model');
/**
 * Player Model
 *
 * @property User $User
 * @property PreferredCoach $PreferredCoach
 * @property PreferredVenue $PreferredVenue
 * @property PreferredCourtSurface $PreferredCourtSurface
 */
class Player extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PreferredCoach' => array(
			'className' => 'Coach',
			'foreignKey' => 'preferred_coach_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PreferredVenue' => array(
			'className' => 'Club',
			'foreignKey' => 'preferred_venue_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PreferredCourtSurface' => array(
			'className' => 'CourtSurface',
			'foreignKey' => 'preferred_court_surface_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
