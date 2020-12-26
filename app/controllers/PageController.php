<?php

    class PageController extends Controller{
        
        public function __construct(){
            $this->userModel = $this->model('User');
        }

        public function index(){

            $users = $this->userModel->getUsers();

            $data = [
                'title' => 'home page',
                'users'  => $users,
            ];
            $this->view('pages/index', $data);
        }

        public function create(){
            $this->view('pages/add');
        }

        public function store(){
            $data = $query->email;
            $this->view('pages/index', $data);
        }

        public function show(){

        }

        public function edit(){
           
        }

        public function update(){
            
        }

        public function destroy(){

        }

    }