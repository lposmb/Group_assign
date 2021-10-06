<?php

namespace Kanboard\Plugin\Group_assign\Api\Procedure;

use Kanboard\Api\Procedure\BaseProcedure;
use Kanboard\Api\Authorization\ProjectAuthorization;
use Kanboard\Api\Authorization\TaskAuthorization;
use Kanboard\Filter\TaskProjectFilter;
use Kanboard\Model\TaskModel;

/**
 * Task API controller
 *
 * @package  Kanboard\Api\Procedure
 * @author   Frederic Guillot
 */
class TaskExtProcedure extends BaseProcedure
{
    public function getAllTasksWithAllAssignees($project_id, $status_id = TaskModel::STATUS_OPEN)
    {
        ProjectAuthorization::getInstance($this->container)->check($this->getClassName(), 'getAllTasks', $project_id);
        $tasks = $this->taskFinderModel->getAll($project_id, $status_id);
	foreach ($tasks as $task) {
		$task['allassignees'] = 'TODO';
		// $members = $this->multiselectMemberModel->getMembers($ms_id);
	}
        return $this->tasksApiFormatter->withTasks($tasks)->format();
    }
}
