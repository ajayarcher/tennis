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
        $this->autoRender = false;
        // For CakePHP 2+
        $this->Auth->allow();
        $this->response->type('json');
        header('Access-Control-Allow-Origin: *');
    }

    public function login() {
        //pr(getallheaders());die;
        if ($this->request->is('post')) {
            if (isset($this->request->data['email']) && isset($this->request->data['password'])) {
                $check = $this->User->checkLogin($this->request->data['email'], $this->request->data['password']);
                if (empty($check)) {
                    $response['status'] = false;
                    $response['message'] = 'Either email or password is wrong';
                } else {
                    if ($check['User']['status'] == 1) {
                        $response['status'] = true;
                        $response['data'] = $check;
                    } else {
                        $response['status'] = false;
                        $response['message'] = 'Your account is not activated';
                    }
                }
            } else {
                $response['status'] = false;
                $response['message'] = 'Invalid request';
            }
        } else {
            $response['status'] = false;
            $response['message'] = 'Invalid request';
        }
        echo json_encode($response);
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
        if ($this->request->is('post')) {
            if (!isset($this->request->data['is_public'])) {
                $this->request->data['is_public'] = 0;
            }
            if (!isset($this->request->data['is_rating_public'])) {
                $this->request->data['is_rating_public'] = 0;
            }
            if (!isset($this->request->data['is_ranking_public'])) {
                $this->request->data['is_ranking_public'] = 0;
            }
            if (!isset($this->request->data['is_trait_public'])) {
                $this->request->data['is_trait_public'] = 0;
            }
            if (!isset($this->request->data['is_badge_public'])) {
                $this->request->data['is_badge_public'] = 0;
            }
            if (!isset($this->request->data['is_friend_public'])) {
                $this->request->data['is_friend_public'] = 0;
            }
            if (!isset($this->request->data['is_open_beaconplay'])) {
                $this->request->data['is_open_beaconplay'] = 0;
            }
            if (!isset($this->request->data['is_open_challangeplay'])) {
                $this->request->data['is_open_challangeplay'] = 0;
            }
            $this->User->Player->id = $this->request->data['user_id'];
            if ($this->User->Player->save($this->request->data)) {
                $response['status'] = true;
            } else {
                $response['status'] = false;
                $response['message'] = 'Can not save';
            }
            echo json_encode($response);
            die;
        }
        //pr($this->request->data);die;
        $this->User->Player->recursive = 2;
        $userDetails = $this->User->Player->findByUserId($this->request->data['user_id']);
        if (!empty($userDetails)) {
            $response['status'] = true;
            $response['data'] = $userDetails;
        } else {
            $response['status'] = false;
            $response['message'] = 'Can not found user details';
        }
        echo json_encode($response);
    }

    public function venues() {
        $venues = $this->User->Club->find('all');
        if (!empty($venues)) {
            $response['status'] = true;
            $response['data'] = $venues;
        } else {
            $response['status'] = false;
            $response['message'] = 'Can not found venues';
        }
        //pr($response);die;
        echo json_encode($response);
    }

    public function friends() {
        $userId = $this->request->data['user_id'];
        $friends = $this->User->Friend->findAllByUserId($userId);
        if (!empty($friends)) {
            $response['status'] = true;
            $response['data'] = $friends;
        } else {
            $response['status'] = false;
            $response['message'] = 'Can not found friends';
        }
        //pr($response);die;
        echo json_encode($response);
    }

    public function coachesByClubId() {
        $coaches = $this->User->Club->Coach->findAllByClubId($this->request->data['club_id']);
        if (!empty($coaches)) {
            $response['status'] = true;
            $response['data'] = $coaches;
        } else {
            $response['status'] = false;
            $response['message'] = 'Can not found coaches';
        }
        //pr($response);die;
        echo json_encode($response);
    }

    public function registration() {
        if ($this->request->is('post')) {
            $roles = $this->User->Role->findByName("player");
            if (!empty($roles)) {
                $user['User']['email'] = $this->request->data['email'];
                $user['User']['password'] = AuthComponent::password($this->request->data['password']);
                $user['User']['role_id'] = $roles['Role']['id'];
                if ($this->User->save($user)) {
                    $player['Player'] = $this->request->data;
                    $userId = $this->User->getInsertID();
                    $player['Player']['user_id'] = $userId;
                    if ($this->User->Player->save($player)) {
                        $response['status'] = true;
                    } else {
                        $this->User->delete($userId);
                        $response['status'] = false;
                        $response['message'] = 'Can not save user details';
                    }
                } else {
                    $response['status'] = false;
                    $response['message'] = 'Can not save user credential';
                }
            } else {
                $response['status'] = false;
                $response['message'] = 'Can not found role';
            }
        } else {
            $response['status'] = false;
            $response['message'] = 'Invalid request';
        }
        echo json_encode($response);
    }

    public function searchCoaches() {
        if ($this->request->is('post')) {
            $keyword = @$this->request->data['keyword'];
            if ($keyword != '') {
                if ($keyword == '*') {
                    $coaches = $this->User->Coach->find('all');
                } else {
                    $coaches = $this->User->Coach->find('all', array('conditions' => array('OR' => array(
                                'Coach.name like ' => $keyword . '%',
                                'Coach.summary like ' => $keyword . '%',
                                'Coach.detail like ' => $keyword . '%',
                                'Coach.qualification like ' => $keyword . '%'
                            )
                    )));
                }
                if (!empty($coaches)) {
                    $response['status'] = true;
                    $response['data'] = $coaches;
                } else {
                    $response['status'] = false;
                    $response['message'] = 'Coach can not found';
                }
            } else {
                $response['status'] = false;
                $response['message'] = 'Keyword can not be blank';
            }
        } else {
            $response['status'] = false;
            $response['message'] = 'Invalid request';
        }
        echo json_encode($response);
    }

    public function searchClubs() {
        if ($this->request->is('post')) {
            $keyword = @$this->request->data['keyword'];
            if ($keyword != '') {
                $coaches = $this->User->Club->find('all', array('conditions' => array('OR' => array(
                            'Club.name like ' => $keyword . '%',
                            'Club.address like ' => $keyword . '%'
                        )
                )));
                if (!empty($coaches)) {
                    $response['status'] = true;
                    $response['data'] = $coaches;
                } else {
                    $response['status'] = false;
                    $response['message'] = 'Club can not found';
                }
            } else {
                $response['status'] = false;
                $response['message'] = 'Keyword can not be blank';
            }
        } else {
            $response['status'] = false;
            $response['message'] = 'Invalid request';
        }
        echo json_encode($response);
    }

    public function getAllCourtSurfaces() {
        if ($this->request->is('post')) {
            $surfaces = $this->User->CourtSurface->find('all');
            if (!empty($surfaces)) {
                $response['status'] = true;
                $response['data'] = $surfaces;
            } else {
                $response['status'] = false;
                $response['message'] = 'Court surfaces can not found';
            }
        } else {
            $response['status'] = false;
            $response['message'] = 'Invalid request';
        }
        echo json_encode($response);
    }

    public function searchFriends() {
        if ($this->request->is('post')) {
            $userId = $this->request->data['user_id'];
            $keyword = $this->request->data['keyword'];
            $players = $this->User->Player->find('list', array('conditions' => array('OR' => array(
                        'Player.first_name like ' => $keyword . '%',
                        'Player.last_name like ' => $keyword . '%'
            ))));
            if (!empty($players)) {
                $player = array_keys($players);
                $friends = $this->User->Friend->find('all', array('conditions' => array(
                        'Friend.friend_id' => $player,
                        'Friend.user_id' => $userId
                )));
                if (!empty($friends)) {
                    $response['status'] = true;
                    $response['data'] = $friends;
                } else {
                    $response['status'] = false;
                    $response['message'] = 'friends can not found';
                }
            } else {
                $response['status'] = false;
                $response['message'] = 'Can not found friends';
            }
        } else {
            $response['status'] = false;
            $response['message'] = 'Invalid request';
        }
        echo json_encode($response);
    }

    public function updateProfilePicture() {
        if ($this->request->is('post')) {
            $userId = $this->request->data['user_id'];
            $profilePicture = $this->request->data['profile_picture'];
            $fileName = uniqid();
            $uploadPath = 'uploads';
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath);
            }
            if (file_put_contents($uploadPath . DIRECTORY_SEPARATOR . $fileName . ".jpg", $profilePicture)) {
                $player = $this->User->Player->findByUserId($userId);
                if (!empty($player)) {
                    $this->User->Player->id = $player['Player']['id'];
                    if ($this->User->Player->save(array('profile_picture' => $fileName . ".jpg"))) {
                        $response['status'] = true;
                    } else {
                        $response['status'] = false;
                        $response['message'] = 'Profile picture can not save';
                    }
                } else {
                    $response['status'] = false;
                    $response['message'] = 'Player can not found';
                }
            } else {
                $response['status'] = false;
                $response['message'] = 'Profile picture can not save';
            }
        } else {
            $response['status'] = false;
            $response['message'] = 'Invalid request';
        }
        echo json_encode($response);
    }

    public function bookClub() {
        if ($this->request->is('post')) {
            $userId = $this->request->data['user_id'];
            $clubId = $this->request->data['club_id'];
            $date = date("Y-m-d", strtotime($this->request->data['date']));
            $day = date("l", strtotime($this->request->data['date']));
            $start_time = date("H:i:s", strtotime($this->request->data['start_time']));
            $end_time = date("H:i:s", strtotime($this->request->data['end_time']));
            $availableOperatingHour = $this->User->Club->ClubOperatingHour->find("count", array("conditions" => array(
                    'ClubOperatingHour.day' => $day,
                    'ClubOperatingHour.start_time <= ' => $start_time,
                    'ClubOperatingHour.end_time >= ' => $end_time
            )));
            if ($availableOperatingHour > 0) {
                $alreadyBook = $this->User->Club->ClubBooking->find('count', array('conditions' => array(
                        'ClubBooking.club_id' => $clubId,
                        'ClubBooking.book_date' => $date,
                        'ClubBooking.book_start_time <= ' => $start_time,
                        'ClubBooking.book_end_time >= ' => $end_time
                )));
                if ($alreadyBook <= 0) {
                    $book['ClubBooking']['user_id'] = $userId;
                    $book['ClubBooking']['club_id'] = $clubId;
                    $book['ClubBooking']['book_date'] = $date;
                    $book['ClubBooking']['book_start_time'] = $start_time;
                    $book['ClubBooking']['book_end_time'] = $end_time;
                    if ($this->User->Club->ClubBooking->save($book)) {
                        $response['status'] = true;
                    } else {
                        $response['status'] = false;
                        $response['message'] = "Can not book";
                    }
                } else {
                    $alreadyBook = $this->User->Club->ClubBooking->find('all', array('conditions' => array(
                            'ClubBooking.club_id' => $clubId,
                            'ClubBooking.book_date' => $date
                    )));
                    $response['status'] = false;
                    $response['data_type'] = "Booked Hours";
                    $response['data'] = $alreadyBook;
                }
            } else {
                $availableOperatingHour = $this->User->Club->ClubOperatingHour->find("all", array("conditions" => array(
                        'ClubOperatingHour.day' => $day
                )));
                $response['status'] = false;
                $response['data_type'] = "Operating Hours";
                $response['data'] = $availableOperatingHour;
            }
        } else {
            $response['status'] = false;
            $response['message'] = 'Invalid request';
        }
        echo json_encode($response);
    }

    public function insertUpdateClub() {
        if ($this->request->is('post')) {
            if (isset($this->request->data['id']) && $this->request->data['id'] != '') {
                $this->User->Club->id = $this->request->data['id'];
            }
            if ($this->User->Club->save($this->request->data)) {
                if (isset($this->request->data['id']) && $this->request->data['id'] != '') {
                    $clubId = $this->request->data['id'];
                } else {
                    $clubId = $this->User->Club->getInsertID();
                }
                $alreadyHours = $this->User->Club->ClubOperatingHour->findAllByClubId($clubId);
                if(!empty($alreadyHours)){
                    $this->User->Club->ClubOperatingHour->deleteAll(array("ClubOperatingHour.club_id"=>$clubId));
                }
                if(!empty($this->request->data['operating_hours'])){
                    foreach($this->request->data['operating_hours'] as $hours){
                        $hour['club_id'] = $clubId;
                        $hour['day'] = $hours['day'];
                        $hour['start_time'] = date("H:i:s", strtotime($hours['start_time']));
                        $hour['end_time'] = date("H:i:s", strtotime($hours['start_time']));
                        $this->User->Club->ClubOperatingHour->create();
                        $this->User->Club->ClubOperatingHour->save($hour);
                    }
                }
                $response['status'] = true;
            } else {
                $response['status'] = false;
                $response['message'] = "Can not save club details";
            }
        } else {
            $response['status'] = false;
            $response['message'] = 'Invalid request';
        }
        echo json_encode($response);
    }
    
}
    