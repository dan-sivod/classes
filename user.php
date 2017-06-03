<?php
    class user
    {
        protected $name;
        protected $mail;
        protected $password;
        protected $time;
        protected $last_visited_page;
        protected $id;

        public function __construct($user_name, $user_mail, $user_password, $user_id)
        {
            this->$name = $user_name;
		    this->$mail = $user_mail;
		    this->$password = $user_password;
		    this->$time = time();
		    this->$last_visited_page = $__SERVER['PHP_SELF'];
		    this->$id = $user_id;
	    }

        public function __destruct()
        {
            this->$name = 0;
		    this->$mail = 0;
		    this->$password = 0;
		    this->$time = 0;
		    this->$last_visited_page = 0;
		    this->$id = 0;
	    }

        public function get_name()
        {
            return this->$name;
	    }

        public function get_mail()
        {
            return this->$mail;
	    }

        public function get_password()
        {
            return this->$password;
	    }

        public function get_time()
        {
            return this->$time;
	    }

        public function get_last_visited_page()
        {
            return this->$last_visited_page;
	    }

        public function get_id()
        {
            return this->$id;
	    }

        public function set_name($user_name)
        {
            this->$name = $user_name;
	    }

        public function set_mail($user_mail)
        {
            this->$mail = $user_mail;
	    }

        public function set_password($user_password)
        {
            this->$password = password_hash($user_password);
	    }
    }
?>

