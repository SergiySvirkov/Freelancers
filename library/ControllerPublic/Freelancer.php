<?php

class Freelancers_ControllerPublic_Freelancer extends XenForo_ControllerPublic_Abstract
{
    public function actionView()
    {
        $userId = $this->_input->filterSingle('user_id', XenForo_Input::UINT);

        // Fetch freelancer data based on $userId
        $freelancerModel = $this->_getFreelancerModel();
        $freelancer = $freelancerModel->getFreelancerById($userId);

        if (!$freelancer) {
            return $this->responseError(new XenForo_Phrase('requested_freelancer_not_found'), 404);
        }

        $viewParams = array(
            'freelancer' => $freelancer,
        );

        return $this->view('Freelancers_ViewPublic_Freelancer_View', 'freelancer_view', $viewParams);
    }

    protected function _getFreelancerModel()
    {
        return $this->getModelFromCache('Freelancers_Model_Freelancer');
    }
}
