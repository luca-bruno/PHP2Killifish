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

    # These are the fields/columns that can be edited by the user when creating a post.
    # Anything else will be taken care of by CodeIgniter.
    protected $allowedFields    = [
                                    'postTitle',
                                    'postDescription',
                                    'postAuthor',
                                    'postSlug'
                                ];
    
    # All activity will be recorded as timestamps.
    protected $useTimestamps    = true;

    # We want an integer timestamp.
    protected $dateFormat       = 'int';

    # These are the fields that will be updated internally.
    protected $createdField     = 'postCreated_at';
    protected $updatedField     = 'postUpdated_at';

    /**
     *  Gets the posts items from the table.
     */
    function getPosts($postSlug = false)
    {
        $builder = $this->db->table('posts');
        
        // foreign key link between postAuthor and userID
        $builder->select('posts.*, users.userScreenName')
                    ->join('users', 'posts.postAuthor = users.userID', 'left');

        if ($postSlug !== false)
        {
            $builder->where('postSlug', $postSlug); // searches for records matching post slug value
        }

        $result = $builder->get()->getResultArray(); // returns query result as pure array, or empty array if no result found
        return count($result) == 1 ? $result[0] : $result; // if count in array is 1 (i.e. found result), return first element in array (found result), else return empty array
    }
    
}