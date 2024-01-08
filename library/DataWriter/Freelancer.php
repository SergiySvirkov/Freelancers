<?php

class Freelancers_DataWriter_Freelancer extends XenForo_DataWriter
{
    protected function _getFields()
    {
        return array(
            'xf_freelancer' => array(
                'freelancer_id' => array('type' => self::TYPE_UINT, 'autoIncrement' => true),
                'user_id' => array('type' => self::TYPE_UINT, 'required' => true),
                // Add more fields as needed for freelancer data
            )
        );
    }

    protected function _getExistingData($data)
    {
        if (!$userId = $this->_getExistingPrimaryKey($data, 'user_id')) {
            return false;
        }

        return array('xf_freelancer' => $this->_getFreelancerModel()->getFreelancerById($userId));
    }

    protected function _getFreelancerModel()
    {
        return $this->getModelFromCache('Freelancers_Model_Freelancer');
    }
}
