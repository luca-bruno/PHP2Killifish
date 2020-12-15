<?php 
namespace App\Validation;
use App\Models\UserModel;

class UserRules {
    public function validateUser(string $str, string $fields, array $data){ //custom validation rules for Login
        $model = new UserModel();
        $user = $model->where('userScreenName', $data['userScreenName'])
                    ->first();

        if(!$user) { //if user match is not found, return false
        return false;
        }
        
        return password_verify($data['userPassword'], $user['userPassword']); //returns entered password and hashed password in database
    }
}