<?php

  class Users extends Model {
    private $_isLoggedIn, $_sessionName, $_cookieName;
    public static $currentLoggedInUser = null;

    public function __construct($user='')
    {
      $table = 'users';
      parent::__construct($table);
      $this->_sessionName = CURRENT_USER_SESSION_NAME;
      $this->_cookieName = REMEBER_ME_COOCKIE_NAME;
      $this->_softDelete = true;
      if ($user != '') {
        if (is_int($user)) {
          $u = $this->_db->findFirst('users',['conditions'=>'id =?', 'bind'=>[$user]]);
        } else {
          $u = $this->_db->findFirst('users', ['condtions'=>'username = ?','bind'=>[$user]]);
        }
        if ($u) {
          foreach ($u as $key => $val) {
            $this->$key = $val;
          }
        }
      }
    }

    public function findByUsername($username)
    {
      return $this->findFirst(['conditions'=>"username = ?", 'bind'=>[$username]]);
    }

    public function login($rememberMe=false)
    {
      Session::set($this->_sessionName, $this->id);
      if ($rememberMe) {
        $hash = md5(uniqid() + rand(0, 100));
        $user_agent = Session::uagent_no_version();
        Cookies::set($this->_cookieName, $hash, REMEBER_COOCKIE_EXPIRY);
        $fields = ['session'=>$hash, 'user_agent'=>$user_agent, 'user_id'=>$this->id];
        $this->_db->query("DELETE FROM user_sessions WHERE user_id = ? AND USER_AGENT = ?", [$this->id, $user_agent]);
        $this->_db->insert('user_sessions', $fields);
      }
    }
  }
