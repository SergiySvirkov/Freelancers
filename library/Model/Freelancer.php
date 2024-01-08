<?php

class Freelancers_Model_Freelancer extends XenForo_Model
{
    public function getFreelancerById($userId)
    {
        return $this->_getDb()->fetchRow('
            SELECT *
            FROM xf_freelancer
            WHERE user_id = ?
        ', $userId);
    }

    // Add more methods as needed for fetching and manipulating freelancer data
}
