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
        //$this->Auth->allow('profile');
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

    public function profile() {
        /* if ($this->request->is('post')) {
          if (!isset($this->request->data['UserDetail']['is_sport_level_public'])) {
          $this->request->data['UserDetail']['is_sport_level_public'] = 0;
          }
          if (!isset($this->request->data['UserDetail']['is_rating_public'])) {
          $this->request->data['UserDetail']['is_rating_public'] = 0;
          }
          if (!isset($this->request->data['UserDetail']['is_rank_public'])) {
          $this->request->data['UserDetail']['is_rank_public'] = 0;
          }
          if (!isset($this->request->data['UserDetail']['is_badge_public'])) {
          $this->request->data['UserDetail']['is_badge_public'] = 0;
          }
          if (!isset($this->request->data['UserDetail']['is_beaconplay'])) {
          $this->request->data['UserDetail']['is_beaconplay'] = 0;
          }
          if (!isset($this->request->data['UserDetail']['is_challangeplay'])) {
          $this->request->data['UserDetail']['is_challangeplay'] = 0;
          }
          $this->User->UserDetail->id = $this->Session->read("Auth.User")['UserDetail']['id'];
          if ($this->User->UserDetail->save($this->request->data)) {
          $response['status'] = true;
          } else {
          $response['status'] = false;
          $response['message'] = 'Can not save';
          }
          echo json_encode($response);
          die;
          } */
        $this->User->Player->recursive = 2;
        $userDetails = $this->User->Player->findByUserId($this->request->data['user_id']);
        if (!empty($userDetails)) {
            $response['status'] = true;
            $response['data'] = $userDetails;
        } else {
            $response['status'] = false;
            $response['message'] = 'Can not found user details';
        }
        echo json_encode($response);die;
    }

}
