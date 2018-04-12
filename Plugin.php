<?php

namespace Kanboard\Plugin\group_assign;

use Kanboard\Core\Plugin\Base;
use Kanboard\Model\TaskModel;
//use Kanboard\Plugin\group_assign\Filter\group_assign_filter; //Needs work
use Kanboard\Model\TaskFinderModel;
use PicoDb\Table;

class Plugin extends Base
{
    public function initialize()
    {
        //Models
        
        //Task - Template - details.php
        
        //Forms - task_creation.php and task_modification.php
        $this->template->setTemplateOverride('task_creation/show', 'group_assign:task_creation/show');
        $this->template->setTemplateOverride('task_modification/show', 'group_assign:task_modification/show');
      
        //Board - Template - task_private.php, task_avatar.php, task_public.php
        
    }


    public function getPluginName()
    {
        return 'Group Assign';
    }
    public function getPluginDescription()
    {
        return t('Add group assignment to tasks');
    }
    public function getPluginAuthor()
    {
        return 'Craig Crosby';
    }
    public function getPluginVersion()
    {
        return '0.0.1';
    }
    public function getPluginHomepage()
    {
        return 'https://github.com/creecros/group_assign';
    }
}