<?php
/* 
 * This controller controlls the which user can see which page to go
 * to in the navigation bar
 */
class Roles extends Application
{
        public function actor($role = ROLE_GUEST)
        {
            $this->session->set_userdata('userrole',$role);
            redirect($_SERVER['HTTP_REFERER']); // back where we came from
        }
}

