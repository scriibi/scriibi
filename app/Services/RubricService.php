<?php 

namespace App\Services;

use Exception;
use App\Repositories\Interfaces\RubricRepositoryInterface;

class RubricService
{
    /**      
     * @var RubricRepositoryInterface    
     */  
    protected $rubricRepositoryInterface;

    public function __construct(RubricRepositoryInterface $rubricRepoInt)
    {
        $this->rubricRepositoryInterface = $rubricRepoInt;
    }    

    /**
    * Creates a new teacher rubric template and attaches the associations to the
    * appropriate skills and teacher
    * @param $teacherId
    * @param $templateName
    * @param $templateLevel
    * @param $templateSkills
    * @return bool
    */
    public function saveTeacherTemplate($teacherId, $templateName, $templateLevel, $templateSkills): bool
    {
        try
        {
            $rubric = $this->rubricRepositoryInterface->addRubric($templateName, $templateLevel);
            $rubric->skills()->attach($templateSkills);
            $rubric->teachers()->attach($teacherId);
            return true;
        }
        catch(Exception $e)
        {
            return false;
        }
    }
}
?>