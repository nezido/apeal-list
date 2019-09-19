<?php

class Controller_List extends Controller
{

    function __construct()
    {
        $this->model = new Model_List();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('list_view.php', 'template_view.php', $data);
    }
}