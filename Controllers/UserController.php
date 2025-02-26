<?php
class UserController extends BaseController{
    public function index() {
        $this->view('users/user_list');
    }
    public function login() {
        $this->view('users/login');
    }
}