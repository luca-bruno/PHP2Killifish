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

    # This makes sure the controller will never delete a field.
    protected $useSoftDeletes   = true;


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
}