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
        $this->Auth->allow('login','verifyEmail','signup');
    }

    public function login() {
        if ($this->request->is('post')) {
            $check = $this->User->checkLogin($this->request->data['User']['username'], $this->request->data['User']['password']);
            if (empty($check)) {
                $this->Flash->error(__('Either username or password is wrong'));
            } else {
                $this->Session->write("Auth.User", $check);
                $this->redirect(array('controller' => 'users', 'action' => 'dashboard'));
            }
        }
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

}
