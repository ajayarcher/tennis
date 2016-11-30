<?php

App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class UsersController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Session', 'Flash');

    public function beforeFilter() {
        parent::beforeFilter();

        // For CakePHP 2+
        $this->Auth->allow('login','logout','signup');
    }

    public function login() {
        if ($this->request->is('post')) {
            $check = $this->User->checkLogin($this->request->data['User']['username'], $this->request->data['User']['password']);
            if (empty($check)) {
                $response['status'] = false;
                $response['message'] = 'Either username or password is wrong';
            } else {
                if ($check['User']['status'] == 1) {
                    $this->Session->write("Auth.User", $check);
                    sleep(2);
                    $response['status'] = true;
                    $response['data'] = $check;
                } else {
                    $response['status'] = false;
                    $response['message'] = 'Your account is not activated';
                }
            }
            echo json_encode($response);
            die;
        }
    }

    public function dashboard() {
        
    }

    public function signup() {
        if ($this->request->is('post')) {
            
        }
    }

    // verify email address
    public function verifyEmail($username, $code) {
        $this->layout = false;
        $check = $this->User->find('first', array('conditions' => array(
                'User.username' => base64_decode($username),
                'User.verification_code' => $code
        )));
        if (!empty($check)) {
            $this->User->id = $check['User']['id'];
            $user['status'] = 1;
            if ($this->User->save($user)) {
                $this->Flash->success(__('Account verified success'));
            } else {
                $this->Flash->error(__('Account can not verified'));
            }
        } else {
            $this->Flash->error(__('Account can not verified'));
        }
    }

    public function logout() {
        $this->Auth->logout();
        $this->redirect(array('controller' => 'users', 'action' => 'login'));
    }

    public function venue() {
        
    }

    public function searchVenues() {
        $term = $this->params->query['term'];
        $this->loadModel('Venue');
        $venues = $this->Venue->find('list', array('conditions' => array(
                "Venue.name Like" => "$term%"
        )));
        echo json_encode($venues);
        die;
    }

    public function profile() {
        $this->User->UserDetail->recursive = 2;
        $userDetails = $this->User->UserDetail->findByUserId($this->Session->read("Auth.User")['User']['id']);
        //pr($userDetails);die;
        $this->set('userDetails', $userDetails);
    }

}
