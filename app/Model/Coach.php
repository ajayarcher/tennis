<?php

App::uses('AppModel', 'Model');

/**
 * Coach Model
 *
 * @property Club $Club
 */
class Coach extends AppModel {

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
    public $hasMany = array(
        'CoachRelation' => array(
            'className' => 'CoachRelation',
            'foreignKey' => 'coach_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'ClubBooking' => array(
            'className' => 'ClubBooking',
            'foreignKey' => 'coach_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

}
