<?php 
# Namespaces collect code into one "library".
namespace App\Models;

# The default model class.
use CodeIgniter\Model;

class CommentModel extends Model{
    # The table to link with.
    protected $table        = 'comments';

    # The primary key reference.
    protected $primaryKey   = 'commentID';


    # What kind of data a query will return.
    protected $returnType       = 'array';

    // # This makes sure the controller will never delete a field.
    // protected $useSoftDeletes   = true;
    

    # These are the fields/columns that can be edited by the user when creating a comment.
    # Anything else will be taken care of by CodeIgniter.
    protected $allowedFields    = [
                                    'commentDescription',
                                    'commentAuthor',
                                    'commentSlug'
                                ];
    
    # All activity will be recorded as timestamps.
    protected $useTimestamps    = true;

    # We want an integer timestamp.
    protected $dateFormat       = 'int';

    # These are the fields that will be updated internally.
    protected $createdField     = 'commentCreated_at';
    protected $updatedField     = 'commentUpdated_at';

    /**
     *  Gets the comments items from the table.
     */
    function getComments($commentSlug = false)
    {
        $builder = $this->db->table('comments');

        $builder->select('comments.*, users.userScreenName')
                    ->join('users', 'comments.commentAuthor = users.userID', 'left');

        if ($commentSlug !== false)
        {
            $builder->where('commentSlug', $commentSlug); //error is returning first record without a slug
        }

        $result = $builder->get()->getResultArray();
        return count($result) == 1 ? $result[0] : $result;
    }
    
}