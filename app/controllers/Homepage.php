<?php

class Homepage extends BaseController
{

    public function index()
    {
        /**
         * Dit is het $data-array met informatie voor de view van deze controller
         */
        $data = [
            'title' => 'Homepage<br>'
        ];

        /**
         * Hier roepen we de BaseController-method view() aan
         */
        $this->view('homepage/index', $data);
    }
}