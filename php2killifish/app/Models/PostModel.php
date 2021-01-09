<?php 
# Namespaces collect code into one "library".
namespace App\Models;

# The default model class.
use CodeIgniter\Model;

class PostModel extends Model{
    # The table to link with.
    protected $table        = 'posts';

    # The primary key reference.
    protected $primaryKey   = 'postID';


    # What kind of data a query will return.
    protected $returnType       = 'array';

    // # This makes sure the controller will never delete a field.
    // protected $useSoftDeletes   = true;
        // had to comment this out due to "Unknown column 'users.deleted_at' in 'where clause' search" error post-login

    # These are the fields/columns that can be edited by the user.
    # Anything else will be taken care of by CodeIgniter.
    protected $allowedFields    = [
                                    'postTitle',
                                    'postDescription'
                                ];
    
    # All activity will be recorded as timestamps.
    protected $useTimestamps    = true;

    # We want an integer timestamp.
    protected $dateFormat       = 'int';

    # These are the fields that will be updated internally.
    protected $createdField     = 'postCreated_at';
    protected $updatedField     = 'postUpdated_at';
    
}