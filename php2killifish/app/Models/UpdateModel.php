<?php 
# Namespaces collect code into one "library".
namespace App\Models;

# The default model class.
use CodeIgniter\Model;

class UpdateModel extends Model{
    # The table to link with.
    protected $table        = 'news';

    # The primary key reference.
    protected $primaryKey   = 'newsID';


    # What kind of data a query will return.
    protected $returnType       = 'array';

    // # This makes sure the controller will never delete a field.
    // protected $useSoftDeletes   = true;
        // had to comment this out due to "Unknown column 'users.deleted_at' in 'where clause' search" error post-login

    # These are the fields/columns that can be edited by the user.
    # Anything else will be taken care of by CodeIgniter.
    protected $allowedFields    = [
                                    'newsTitle',
                                    'newsDescription',
                                    'newsAuthor',
                                    'slug'
                                ];
    
    # All activity will be recorded as timestamps.
    protected $useTimestamps    = true;

    # We want an integer timestamp.
    protected $dateFormat       = 'int';

    # These are the fields that will be updated internally.
    protected $createdField     = 'newsCreated_at';
    protected $updatedField     = 'newsUpdated_at';

    /**
     *  Gets the news items from the table.
     */
    function getNews($slug = false)
    {
        if ($slug === false){
            return $this->findAll();
        }

        return $this->select('news.*, users.userFirstName, users.userLastName, users.userScreenName')
                    ->asArray()
                    ->where('slug', $slug) //error is returning first record without a slug
                    ->join('users', 'users.userID = news.newsAuthor', 'left')
                    ->first();
    }
    
}