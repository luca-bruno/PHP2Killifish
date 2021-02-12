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

    # These are the fields/columns that can be edited by the user when creating a comment.
    # Anything else will be taken care of by CodeIgniter.
    protected $allowedFields    = [
                                    'commentDescription',
                                    'commentAuthor',
                                    'commentParent'
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
    function getComments()
    {
        $builder = $this->db->table('comments');
        
        // foreign key link between commentAuthor and userID
        $builder->select('comments.*, users.userScreenName')
                    ->join('users', 'comments.commentAuthor = users.userID', 'left');
        
        // foreign key link between parent post of comment and postID
        $builder->select('comments.*')
                    ->join('posts', 'comments.commentParent = posts.postID', 'left');

        $result = $builder->get()->getResultArray(); // returns query result as pure array, or empty array if no result found
        return count($result) == 1 ? $result[0] : $result; // if count in array is 1 (i.e. found result), return first element in array (found result), else return empty array
    }
    
}