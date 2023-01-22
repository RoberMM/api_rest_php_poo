<?php
    namespace App\Services;

    use App\Models\User;

    class UserService
    {
        //select
        public function get($id = null) 
        {
            if ($id) {
                return User::select($id);
            } else {
                return User::selectAll();
            }
        }
        
        //cadastrar
        public function post() 
        {
            $data = $_POST;

            return User::insert($data);
        }

        public function update() 
        {
            
        }

        public function delete() 
        {
            
        }
    }