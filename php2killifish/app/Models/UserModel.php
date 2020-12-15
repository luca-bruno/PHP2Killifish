<?php 
# Namespaces collect code into one "library".
namespace App\Models;

# The default model class.
use CodeIgniter\Model;

class UserModel extends Model{
    # The table to link with.
    protected $table        = 'users';

    # The primary key reference.
    protected $primaryKey   = 'userID';


    # What kind of data a query will return.
    protected $returnType       = 'array';

    // # This makes sure the controller will never delete a field.
    // protected $useSoftDeletes   = true;
        // had to comment this out due to "Unknown column 'users.deleted_at' in 'where clause' search" error post-login

    # These are the fields/columns that can be edited by the user.
    # Anything else will be taken care of by CodeIgniter.
    protected $allowedFields    = [
                                    'userFirstName',
                                    'userLastName',
                                    'userScreenName',
                                    'userEmail',
                                    'userPassword'
                                ];
    
    # All activity will be recorded as timestamps.
    protected $useTimestamps    = true;

    # We want an integer timestamp.
    protected $dateFormat       = 'int';

    # These are the fields that will be updated internally.
    protected $createdField     = 'userCreated_at';
    protected $updatedField     = 'userUpdated_at';

    # Password hashing
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    
    protected function passwordHash(array $data){ //password PHP hashing check and function
        if(isset($data['data']['userPassword']))
            $data['data']['userPassword'] = password_hash($data['data']['userPassword'], PASSWORD_DEFAULT);
    
        return $data;
    }

    protected function beforeInsert(array $data){ //runs before inserting to db
        $data = $this->passwordHash($data); //chained the hashing function check
        return $data;
    }
    
    protected function beforeUpdate(array $data){ //runs before updating db
        $data = $this->passwordHash($data); //chained the hashing function check
        return $data;
    }
    
}