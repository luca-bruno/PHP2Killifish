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

    # These are the fields/columns that can be edited by the user.
    # Anything else will be taken care of by CodeIgniter.
    protected $allowedFields    = [
                                    'newsTitle',
                                    'newsDescription',
                                    'newsAuthor',
                                    'newsSlug'
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
    function getNews($newsSlug = false)
    {
        if ($newsSlug === false){
            return $this->findAll();
        }

        // foreign key link between newsAuthor and userID
        return $this->select('news.*, users.userFirstName, users.userLastName, users.userScreenName')
                    ->asArray()
                    ->where('newsSlug', $newsSlug)
                    ->join('users', 'users.userID = news.newsAuthor', 'left')
                    ->first();
    }
    
}