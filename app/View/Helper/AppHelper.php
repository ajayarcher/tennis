<?php

/**
 * Application level View Helper
 *
 * This file is application-wide helper file. You can put all
 * application-wide helper-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Helper
 * @since         CakePHP(tm) v 0.2.9
 */
App::uses('Helper', 'View');

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class AppHelper extends Helper {

    public function getSuffix($id = null) {
        $array = array('Ms.' => 'Ms.', 'Mr.' => 'Mr.', 'Mrs.' => 'Mrs.');
        if ($id) {
            return $array[$id];
        } else {
            return $array;
        }
    }

    public function getCountries($id = null) {
        $country = ClassRegistry::init('Country');
        $countries = $country->find('list');
        if ($id) {
            return $countries[$id];
        } else {
            return $countries;
        }
    }

}
