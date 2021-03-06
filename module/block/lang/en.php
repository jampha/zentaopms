<?php
/**
 * The en file of crm block module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     block 
 * @version     $Id$
 * @link        http://www.zentao.net
 */
$lang->block = new stdclass();
$lang->block->common = 'Block';
$lang->block->name   = 'Name';
$lang->block->style  = 'Style';
$lang->block->grid   = 'Position';
$lang->block->color  = 'Color';
$lang->block->reset  = 'Reset Layout';

$lang->block->account = 'Account';
$lang->block->module  = 'Module';
$lang->block->title   = 'Title';
$lang->block->source  = 'Source Module';
$lang->block->block   = 'Source Block';
$lang->block->order   = 'Order';
$lang->block->height  = 'Height';
$lang->block->role    = 'Role';

$lang->block->lblModule    = 'Module';
$lang->block->lblBlock     = 'Block';
$lang->block->lblNum       = 'Number';
$lang->block->lblHtml      = 'HTML';
$lang->block->dynamic      = 'Dynamics';
$lang->block->assignToMe   = 'AssignedToMe';
$lang->block->done         = 'Done';
$lang->block->lblFlowchart = 'Flowchart';
$lang->block->welcome      = 'Welcome';
$lang->block->lblTesttask  = 'Test Request Detail';
$lang->block->contribute   = 'Personal Contribution';

$lang->block->leftToday       = 'Remained Work';
$lang->block->myTask          = 'My Tasks';
$lang->block->myStory         = 'Stories';
$lang->block->myBug           = 'Bugs';
$lang->block->myProject       = '' . $lang->projectCommon . 's';
$lang->block->myProduct       = '' . $lang->productCommon . 's';
$lang->block->delayed         = 'Delayed';
$lang->block->noData          = 'No data on this type of reports.';
$lang->block->emptyTip        = 'No data.';
$lang->block->openedTodos     = 'The Number Of Todos Created';
$lang->block->openedStories   = 'The Number Of Stories Created';
$lang->block->resolvedTasks   = 'The Number Of Tasks Resolved';
$lang->block->resolvedBugs    = 'The Number Of Bugs Resolved';
$lang->block->openedTestcases = 'The Number Of Test Case Created';
$lang->block->waterfall       = 'CMMI 3';
$lang->block->scrum           = 'Scrum+';
$lang->block->allProject      = 'All ' . $lang->projectCommon;
$lang->block->doingProject    = 'Doning ' . $lang->projectCommon;
$lang->block->finishProject   = 'Finish ' . $lang->projectCommon;
$lang->block->estimatedHours  = 'Estimated Hours';
$lang->block->consumedHours   = 'Consumed Hours';
$lang->block->time            = 'No';
$lang->block->week            = 'Week';
$lang->block->month           = 'Month';

$lang->block->params = new stdclass();
$lang->block->params->name  = 'Name';
$lang->block->params->value = 'Value';

$lang->block->createBlock        = 'Add Block';
$lang->block->editBlock          = 'Edit Block';
$lang->block->ordersSaved        = 'The order is saved.';
$lang->block->confirmRemoveBlock = 'Do you want to remove the Block?';
$lang->block->noticeNewBlock     = 'A new layout is available. Do you want to switch to the new one?';
$lang->block->confirmReset       = 'Do you want to reset the layout?';
$lang->block->closeForever       = 'Permanent Close';
$lang->block->confirmClose       = 'Do you want to permanently close this block? Once done, it is not available to anyone. It can be activiated at Admin->Custom.';
$lang->block->remove             = 'Remove';
$lang->block->refresh            = 'Refresh';
$lang->block->nbsp               = ' ';
$lang->block->hidden             = 'Hide';
$lang->block->dynamicInfo        = "<span class='timeline-tag'>%s</span> <span class='timeline-text'>%s <em>%s</em> %s <a href='%s' title='%s'>%s</a></span>";

$lang->block->productName        = $lang->productCommon . ' Name';
$lang->block->totalStory         = 'The Total ' . $lang->storyCommon;
$lang->block->totalBug           = 'The Total Bug';
$lang->block->totalRelease       = 'Release The Number';

$lang->block->default['waterfall']['program']['1']['title']  = $lang->projectCommon . 'Weekly';
$lang->block->default['waterfall']['program']['1']['block']  = 'Pmmireport';
$lang->block->default['waterfall']['program']['1']['source'] = 'Program';
$lang->block->default['waterfall']['program']['1']['grid']   = 8;

$lang->block->default['waterfall']['program']['2']['title']  = 'Estimate';
$lang->block->default['waterfall']['program']['2']['block']  = 'waterfallestimate';
$lang->block->default['waterfall']['program']['2']['source'] = 'program';
$lang->block->default['waterfall']['program']['2']['grid']   = 4;

$lang->block->default['waterfall']['program']['3']['title']  = 'Plan Gantt Chart';
$lang->block->default['waterfall']['program']['3']['block']  = 'waterfallgantt';
$lang->block->default['waterfall']['program']['3']['source'] = 'program';
$lang->block->default['waterfall']['program']['3']['grid']   = 8;

$lang->block->default['waterfall']['program']['4']['title']  = 'Progress Chart';
$lang->block->default['waterfall']['program']['4']['block']  = 'waterfallprogress';
$lang->block->default['waterfall']['program']['4']['grid']   = 4;

$lang->block->default['waterfall']['program']['5']['title']  = 'Program Issue';
$lang->block->default['waterfall']['program']['5']['block']  = 'waterfallissue';
$lang->block->default['waterfall']['program']['5']['source'] = 'program';
$lang->block->default['waterfall']['program']['5']['grid']   = 8;

$lang->block->default['waterfall']['program']['5']['params']['type']    = 'all';
$lang->block->default['waterfall']['program']['5']['params']['num']     = '15';
$lang->block->default['waterfall']['program']['5']['params']['orderBy'] = 'id_desc';

$lang->block->default['waterfall']['program']['6']['title']  = 'Dynamic';
$lang->block->default['waterfall']['program']['6']['block']  = 'dynamic';
$lang->block->default['waterfall']['program']['6']['grid']   = 4;
$lang->block->default['waterfall']['program']['6']['source'] = '';

$lang->block->default['waterfall']['program']['7']['title']  = $lang->projectCommon . 'Risk';
$lang->block->default['waterfall']['program']['7']['block']  = 'waterfallrisk';
$lang->block->default['waterfall']['program']['7']['source'] = 'program';
$lang->block->default['waterfall']['program']['7']['grid']   = 8;

$lang->block->default['waterfall']['program']['7']['params']['type']    = 'all';
$lang->block->default['waterfall']['program']['7']['params']['num']     = '15';
$lang->block->default['waterfall']['program']['7']['params']['orderBy'] = 'id_desc';

$lang->block->default['scrum']['program']['1']['title'] =  $lang->projectCommon . ' Overall';
$lang->block->default['scrum']['program']['1']['block'] = 'scrumoverall';
$lang->block->default['scrum']['program']['1']['grid']  = 8;

$lang->block->default['scrum']['program']['2']['title'] = $lang->projectCommon . ' List';
$lang->block->default['scrum']['program']['2']['block'] = 'scrumlist';
$lang->block->default['scrum']['program']['2']['grid']  = 8;

$lang->block->default['scrum']['program']['3']['title'] = $lang->productCommon . ' Road Map';
$lang->block->default['scrum']['program']['3']['block'] = 'scrumroadmap';
$lang->block->default['scrum']['program']['3']['grid']  = 8;

$lang->block->default['scrum']['program']['4']['title'] = 'Test Version';
$lang->block->default['scrum']['program']['4']['block'] = 'scrumtest';
$lang->block->default['scrum']['program']['4']['grid']  = 8;

$lang->block->default['scrum']['program']['4']['params']['type']    = 'all';
$lang->block->default['scrum']['program']['4']['params']['num']     = '15';
$lang->block->default['scrum']['program']['4']['params']['orderBy'] = 'id_desc';

$lang->block->default['scrum']['program']['5']['title'] = $lang->productCommon . ' Overview';
$lang->block->default['scrum']['program']['5']['block'] = 'scrumproduct';
$lang->block->default['scrum']['program']['5']['grid']  = 4;

$lang->block->default['scrum']['program']['6']['title'] = $lang->projectCommon . ' Overview';
$lang->block->default['scrum']['program']['6']['block'] = 'sprint';
$lang->block->default['scrum']['program']['6']['grid']  = 4;

$lang->block->default['scrum']['program']['7']['title'] = 'Dynamic';
$lang->block->default['scrum']['program']['7']['block'] = 'scrumdynamic';
$lang->block->default['scrum']['program']['7']['grid']  = 4;

$lang->block->default['product']['1']['title'] = $lang->productCommon . ' Report';
$lang->block->default['product']['1']['block'] = 'statistic';
$lang->block->default['product']['1']['grid']  = 8;

$lang->block->default['product']['1']['params']['type'] = 'all';
$lang->block->default['product']['1']['params']['num']  = '20';

$lang->block->default['product']['2']['title'] = $lang->productCommon . ' Overview';
$lang->block->default['product']['2']['block'] = 'overview';
$lang->block->default['product']['2']['grid']  = 4;

$lang->block->default['product']['3']['title'] = 'Active ' . $lang->productCommon . 's';
$lang->block->default['product']['3']['block'] = 'list';
$lang->block->default['product']['3']['grid']  = 8;

$lang->block->default['product']['3']['params']['num']  = 15;
$lang->block->default['product']['3']['params']['type'] = 'noclosed';

$lang->block->default['product']['4']['title'] = 'My Stories';
$lang->block->default['product']['4']['block'] = 'story';
$lang->block->default['product']['4']['grid']  = 4;

$lang->block->default['product']['4']['params']['num']     = 15;
$lang->block->default['product']['4']['params']['orderBy'] = 'id_desc';
$lang->block->default['product']['4']['params']['type']    = 'assignedTo';

$lang->block->default['project']['1']['title'] = $lang->projectCommon . ' Report';
$lang->block->default['project']['1']['block'] = 'statistic';
$lang->block->default['project']['1']['grid']  = 8;

$lang->block->default['project']['1']['params']['type'] = 'all';
$lang->block->default['project']['1']['params']['num']  = '20';

$lang->block->default['project']['2']['title'] = $lang->projectCommon . ' Overview';
$lang->block->default['project']['2']['block'] = 'overview';
$lang->block->default['project']['2']['grid']  = 4;

$lang->block->default['project']['3']['title'] = 'Active ' . $lang->projectCommon . 's';
$lang->block->default['project']['3']['block'] = 'list';
$lang->block->default['project']['3']['grid']  = 8;

$lang->block->default['project']['3']['params']['num']     = 15;
$lang->block->default['project']['3']['params']['orderBy'] = 'id_desc';
$lang->block->default['project']['3']['params']['type']    = 'undone';

$lang->block->default['project']['4']['title'] = 'My Tasks';
$lang->block->default['project']['4']['block'] = 'task';
$lang->block->default['project']['4']['grid']  = 4;

$lang->block->default['project']['4']['params']['num']     = 15;
$lang->block->default['project']['4']['params']['orderBy'] = 'id_desc';
$lang->block->default['project']['4']['params']['type']    = 'assignedTo';

$lang->block->default['qa']['1']['title'] = 'Test Report';
$lang->block->default['qa']['1']['block'] = 'statistic';
$lang->block->default['qa']['1']['grid']  = 8;

$lang->block->default['qa']['1']['params']['type'] = 'noclosed';
$lang->block->default['qa']['1']['params']['num']  = '20';

//$lang->block->default['qa']['2']['title'] = 'Testcase Overview';
//$lang->block->default['qa']['2']['block'] = 'overview';
//$lang->block->default['qa']['2']['grid']  = 4;

$lang->block->default['qa']['2']['title'] = 'My Bugs';
$lang->block->default['qa']['2']['block'] = 'bug';
$lang->block->default['qa']['2']['grid']  = 4;

$lang->block->default['qa']['2']['params']['num']     = 15;
$lang->block->default['qa']['2']['params']['orderBy'] = 'id_desc';
$lang->block->default['qa']['2']['params']['type']    = 'assignedTo';

$lang->block->default['qa']['3']['title'] = 'My Cases';
$lang->block->default['qa']['3']['block'] = 'case';
$lang->block->default['qa']['3']['grid']  = 4;

$lang->block->default['qa']['3']['params']['num']     = 15;
$lang->block->default['qa']['3']['params']['orderBy'] = 'id_desc';
$lang->block->default['qa']['3']['params']['type']    = 'assigntome';

$lang->block->default['qa']['4']['title'] = 'Waiting Builds';
$lang->block->default['qa']['4']['block'] = 'testtask';
$lang->block->default['qa']['4']['grid']  = 4;

$lang->block->default['qa']['4']['params']['num']     = 15;
$lang->block->default['qa']['4']['params']['orderBy'] = 'id_desc';
$lang->block->default['qa']['4']['params']['type']    = 'wait';

$lang->block->default['full']['my']['1']['title']  = 'Welcome';
$lang->block->default['full']['my']['1']['block']  = 'welcome';
$lang->block->default['full']['my']['1']['grid']   = 8;
$lang->block->default['full']['my']['1']['source'] = '';

$lang->block->default['full']['my']['2']['title']  = 'Dynamics';
$lang->block->default['full']['my']['2']['block']  = 'dynamic';
$lang->block->default['full']['my']['2']['grid']   = 4;
$lang->block->default['full']['my']['2']['source'] = '';

$lang->block->default['full']['my']['3']['title']  = 'My Todos';
$lang->block->default['full']['my']['3']['block']  = 'list';
$lang->block->default['full']['my']['3']['grid']   = 4;
$lang->block->default['full']['my']['3']['source'] = 'todo';
$lang->block->default['full']['my']['3']['params']['num'] = '20';

$lang->block->default['full']['my']['4']['title']  = $lang->projectCommon . ' Statistic';
$lang->block->default['full']['my']['4']['block']  = 'statistic';
$lang->block->default['full']['my']['4']['source'] = 'program';
$lang->block->default['full']['my']['4']['grid']   = 8;

$lang->block->default['full']['my']['5']['title']  = 'Personal Contribution';
$lang->block->default['full']['my']['5']['block']  = 'contribute';
$lang->block->default['full']['my']['5']['source'] = '';
$lang->block->default['full']['my']['5']['grid']   = 4;

$lang->block->default['full']['my']['6']['title']  = 'Recent ' . $lang->projectCommon;
$lang->block->default['full']['my']['6']['block']  = 'recentprogram';
$lang->block->default['full']['my']['6']['source'] = 'program';
$lang->block->default['full']['my']['6']['grid']   = 8;

$lang->block->default['full']['my']['7']['title']  = 'Assigned To Me';
$lang->block->default['full']['my']['7']['block']  = 'task';
$lang->block->default['full']['my']['7']['grid']   = 4;

$lang->block->default['full']['my']['7']['params']['orderBy'] = 'id_desc';
$lang->block->default['full']['my']['7']['params']['num']     = '15';
$lang->block->default['full']['my']['7']['params']['type']    = 'assignedTo';

$lang->block->default['full']['my']['8']['title'] = 'Human Input';
$lang->block->default['full']['my']['8']['block'] = 'programteam';
$lang->block->default['full']['my']['8']['grid']  = 8;

$lang->block->default['full']['my']['9']['title']  = $lang->projectCommon . ' List';
$lang->block->default['full']['my']['9']['block']  = 'program';
$lang->block->default['full']['my']['9']['source'] = 'program';
$lang->block->default['full']['my']['9']['grid']   = 8;

$lang->block->default['full']['my']['9']['params']['orderBy'] = 'id_desc';
$lang->block->default['full']['my']['9']['params']['num']     = '15';

$lang->block->num     = 'Number';
$lang->block->type    = 'Type';
$lang->block->orderBy = 'Order by';

$lang->block->availableBlocks = new stdclass();

$lang->block->availableBlocks->todo     = 'My Todos';
$lang->block->availableBlocks->task     = 'My Tasks';
$lang->block->availableBlocks->bug      = 'My Bugs';
$lang->block->availableBlocks->case     = 'My Cases';
$lang->block->availableBlocks->story    = 'My Stories';
$lang->block->availableBlocks->product  = $lang->productCommon . 's';
$lang->block->availableBlocks->project  = $lang->projectCommon . 's';
$lang->block->availableBlocks->plan     = 'Plans';
$lang->block->availableBlocks->release  = 'Releases';
$lang->block->availableBlocks->build    = 'Builds';
$lang->block->availableBlocks->testtask = 'Requests';
$lang->block->availableBlocks->risk     = 'My Risks';

$lang->block->moduleList['program'] = $lang->projectCommon;
$lang->block->moduleList['product'] = $lang->productCommon;
$lang->block->moduleList['project'] = $lang->projectCommon;
$lang->block->moduleList['qa']      = 'Test';
$lang->block->moduleList['todo']    = 'Todo';

$lang->block->modules['program'] = new stdclass();
$lang->block->modules['program']->availableBlocks = new stdclass();
$lang->block->modules['program']->availableBlocks->program       = $lang->projectCommon . ' List';
$lang->block->modules['program']->availableBlocks->recentprogram = 'Recent ' . $lang->projectCommon;
$lang->block->modules['program']->availableBlocks->statistic     = $lang->projectCommon . ' Statistic';

$lang->block->modules['scrum']['index'] = new stdclass();
$lang->block->modules['scrum']['index']->availableBlocks = new stdclass();
$lang->block->modules['scrum']['index']->availableBlocks->scrumoverall  = $lang->projectCommon . ' Overall';
$lang->block->modules['scrum']['index']->availableBlocks->scrumlist     = $lang->projectCommon . ' List';
$lang->block->modules['scrum']['index']->availableBlocks->sprint        = $lang->projectCommon . ' Overview';
$lang->block->modules['scrum']['index']->availableBlocks->scrumproduct  = $lang->productCommon . ' Overview';
$lang->block->modules['scrum']['index']->availableBlocks->scrumtest     = 'Test Version';
$lang->block->modules['scrum']['index']->availableBlocks->scrumroadmap  = $lang->productCommon . ' Rode Map';

$lang->block->modules['waterfall']['index'] = new stdclass();
$lang->block->modules['waterfall']['index']->availableBlocks = new stdclass();
$lang->block->modules['waterfall']['index']->availableBlocks->waterfallreport    = $lang->projectCommon . ' Weekly';
$lang->block->modules['waterfall']['index']->availableBlocks->waterfallestimate  = 'Estimate';
$lang->block->modules['waterfall']['index']->availableBlocks->waterfallgantt     = 'Plan Gantt Chart';
$lang->block->modules['waterfall']['index']->availableBlocks->waterfallprogress  = 'Progress Chart';
$lang->block->modules['waterfall']['index']->availableBlocks->waterfallissue     = $lang->projectCommon . ' Issue';
$lang->block->modules['waterfall']['index']->availableBlocks->waterfallrisk      = $lang->projectCommon . ' Risk';

$lang->block->modules['product'] = new stdclass();
$lang->block->modules['product']->availableBlocks = new stdclass();
$lang->block->modules['product']->availableBlocks->statistic = $lang->productCommon . ' Report';
$lang->block->modules['product']->availableBlocks->overview  = $lang->productCommon . ' Overview';
$lang->block->modules['product']->availableBlocks->list      = $lang->productCommon . ' List';
$lang->block->modules['product']->availableBlocks->story     = 'Story';
$lang->block->modules['product']->availableBlocks->plan      = 'Plan';
$lang->block->modules['product']->availableBlocks->release   = 'Release';
$lang->block->modules['project'] = new stdclass();
$lang->block->modules['project']->availableBlocks = new stdclass();
$lang->block->modules['project']->availableBlocks->statistic = $lang->projectCommon . ' Report';
$lang->block->modules['project']->availableBlocks->overview  = $lang->projectCommon . ' Overview';
$lang->block->modules['project']->availableBlocks->list  = $lang->projectCommon . ' List';
$lang->block->modules['project']->availableBlocks->task  = 'Task';
$lang->block->modules['project']->availableBlocks->build = 'Build';
$lang->block->modules['qa'] = new stdclass();
$lang->block->modules['qa']->availableBlocks = new stdclass();
$lang->block->modules['qa']->availableBlocks->statistic = 'Test Report';
//$lang->block->modules['qa']->availableBlocks->overview  = 'Testcase Overview';
$lang->block->modules['qa']->availableBlocks->bug      = 'Bug';
$lang->block->modules['qa']->availableBlocks->case     = 'Case';
$lang->block->modules['qa']->availableBlocks->testtask = 'Build';
$lang->block->modules['todo'] = new stdclass();
$lang->block->modules['todo']->availableBlocks = new stdclass();
$lang->block->modules['todo']->availableBlocks->list = 'Todo';

$lang->block->orderByList = new stdclass();

$lang->block->orderByList->product = array();
$lang->block->orderByList->product['id_asc']      = 'Product ID ASC';
$lang->block->orderByList->product['id_desc']     = 'Product ID DESC';
$lang->block->orderByList->product['status_asc']  = 'Product Status ASC';
$lang->block->orderByList->product['status_desc'] = 'Product Status DESC';

$lang->block->orderByList->project = array();
$lang->block->orderByList->project['id_asc']      = 'Project ID ASC';
$lang->block->orderByList->project['id_desc']     = 'Project ID DESC';
$lang->block->orderByList->project['status_asc']  = 'Project Status ASC';
$lang->block->orderByList->project['status_desc'] = 'Project Status DESC';

$lang->block->orderByList->task = array();
$lang->block->orderByList->task['id_asc']        = 'Task ID ASC';
$lang->block->orderByList->task['id_desc']       = 'Task ID DESC';
$lang->block->orderByList->task['pri_asc']       = 'Task Priority ASC';
$lang->block->orderByList->task['pri_desc']      = 'Task Priority DESC';
$lang->block->orderByList->task['estimate_asc']  = 'Task Estimates ASC';
$lang->block->orderByList->task['estimate_desc'] = 'Task Estimates DESC';
$lang->block->orderByList->task['status_asc']    = 'Task Status ASC';
$lang->block->orderByList->task['status_desc']   = 'Task Status DESC';
$lang->block->orderByList->task['deadline_asc']  = 'Task Deadline ASC';
$lang->block->orderByList->task['deadline_desc'] = 'Task Deadline DESC';

$lang->block->orderByList->bug = array();
$lang->block->orderByList->bug['id_asc']        = 'Bug ID ASC';
$lang->block->orderByList->bug['id_desc']       = 'Bug ID DESC';
$lang->block->orderByList->bug['pri_asc']       = 'Bug Priority ASC';
$lang->block->orderByList->bug['pri_desc']      = 'Bug Priority DESC';
$lang->block->orderByList->bug['severity_asc']  = 'Bug Severity ASC';
$lang->block->orderByList->bug['severity_desc'] = 'Bug Severity DESC';

$lang->block->orderByList->case = array();
$lang->block->orderByList->case['id_asc']   = 'Case ID ASC';
$lang->block->orderByList->case['id_desc']  = 'Case ID DESC';
$lang->block->orderByList->case['pri_asc']  = 'Case Priority ASC';
$lang->block->orderByList->case['pri_desc'] = 'Case Priority DESC';

$lang->block->orderByList->story = array();
$lang->block->orderByList->story['id_asc']      = 'Story ID AES';
$lang->block->orderByList->story['id_desc']     = 'Story ID DESC';
$lang->block->orderByList->story['pri_asc']     = 'Story Priority ASC';
$lang->block->orderByList->story['pri_desc']    = 'Story Priority DESC';
$lang->block->orderByList->story['status_asc']  = 'Story Status ASC';
$lang->block->orderByList->story['status_desc'] = 'Story Status DESC';
$lang->block->orderByList->story['stage_asc']   = 'Story Phase ASC';
$lang->block->orderByList->story['stage_desc']  = 'Story Phase DESC';

$lang->block->todoNum = 'Todo';
$lang->block->taskNum = 'Task';
$lang->block->bugNum  = 'Bug';
$lang->block->riskNum = 'Risk';

$lang->block->typeList = new stdclass();

$lang->block->typeList->task['assignedTo'] = 'AssignedToMe';
$lang->block->typeList->task['openedBy']   = 'CreatedByMe';
$lang->block->typeList->task['finishedBy'] = 'FinishedByMe';
$lang->block->typeList->task['closedBy']   = 'ClosedByMe';
$lang->block->typeList->task['canceledBy'] = 'CancelledByMe';

$lang->block->typeList->bug['assignedTo'] = 'AssignedToMe';
$lang->block->typeList->bug['openedBy']   = 'CreatedByMe';
$lang->block->typeList->bug['resolvedBy'] = 'ResolvedByMe';
$lang->block->typeList->bug['closedBy']   = 'ClosedByMe';

$lang->block->typeList->case['assigntome'] = 'AssignedToMe';
$lang->block->typeList->case['openedbyme'] = 'CreatedByMe';

$lang->block->typeList->story['assignedTo'] = 'AssignedToMe';
$lang->block->typeList->story['openedBy']   = 'CreatedByMe';
$lang->block->typeList->story['reviewedBy'] = 'ReviewedByMe';
$lang->block->typeList->story['closedBy']   = 'ClosedByMe' ;
 
$lang->block->typeList->product['noclosed'] = 'Open';
$lang->block->typeList->product['closed']   = 'Closed';
$lang->block->typeList->product['all']      = 'All';
$lang->block->typeList->product['involved'] = 'Involved';

$lang->block->typeList->project['undone']   = 'Unfinished';
$lang->block->typeList->project['doing']    = 'Ongoing';
$lang->block->typeList->project['all']      = 'All';
$lang->block->typeList->project['involved'] = 'Involved';

$lang->block->typeList->scrum['undone']   = 'Unfinished';
$lang->block->typeList->scrum['doing']    = 'Ongoing中';
$lang->block->typeList->scrum['all']      = 'All';
$lang->block->typeList->scrum['involved'] = 'Involved';

$lang->block->typeList->testtask['wait']    = 'Waiting';
$lang->block->typeList->testtask['doing']   = 'Ongoing';
$lang->block->typeList->testtask['blocked'] = 'Blocked';
$lang->block->typeList->testtask['done']    = 'Done';
$lang->block->typeList->testtask['all']     = 'All';

$lang->block->modules['program']->moreLinkList = new stdclass();
$lang->block->modules['program']->moreLinkList->recentprogram = 'program|browse|';
$lang->block->modules['program']->moreLinkList->statistic     = 'program|browse|';
$lang->block->modules['program']->moreLinkList->program       = 'program|browse|';
$lang->block->modules['program']->moreLinkList->cmmireport    = 'weekly|index|';
$lang->block->modules['program']->moreLinkList->cmmiestimate  = 'workestimation|index|';
$lang->block->modules['program']->moreLinkList->cmmiissue     = 'issue|browse|';
$lang->block->modules['program']->moreLinkList->cmmirisk      = 'risk|browse|';
$lang->block->modules['program']->moreLinkList->scrumlist     = 'project|all|';
$lang->block->modules['program']->moreLinkList->scrumroadmap  = 'product|all|';
$lang->block->modules['program']->moreLinkList->scrumtest     = 'testtask|browse|';
$lang->block->modules['program']->moreLinkList->scrumproduct  = 'product|all|';
$lang->block->modules['program']->moreLinkList->sprint        = 'project|all|';
$lang->block->modules['program']->moreLinkList->scrumdynamic  = 'company|dynamic|';

$lang->block->modules['product']->moreLinkList        = new stdclass();
$lang->block->modules['product']->moreLinkList->list  = 'product|all|product=&line=0&status=%s';
$lang->block->modules['product']->moreLinkList->story = 'my|story|type=%s';

$lang->block->modules['project']->moreLinkList        = new stdclass();
$lang->block->modules['project']->moreLinkList->list  = 'project|all|status=%s&project=';
$lang->block->modules['project']->moreLinkList->task  = 'my|task|type=%s';

$lang->block->modules['qa']->moreLinkList           = new stdclass();
$lang->block->modules['qa']->moreLinkList->bug      = 'my|bug|type=%s';
$lang->block->modules['qa']->moreLinkList->case     = 'my|testcase|type=%s';
$lang->block->modules['qa']->moreLinkList->testtask = 'testtask|browse|type=%s';

$lang->block->modules['todo']->moreLinkList       = new stdclass();
$lang->block->modules['todo']->moreLinkList->list = 'my|todo|type=all';

$lang->block->modules['common']                        = new stdclass();
$lang->block->modules['common']->moreLinkList          = new stdclass();
$lang->block->modules['common']->moreLinkList->dynamic = 'company|dynamic|';

$lang->block->welcomeList['06:00'] = 'Good morning, %s';
$lang->block->welcomeList['11:30'] = 'Good day, %s';
$lang->block->welcomeList['13:30'] = 'Good afternoon, %s';
$lang->block->welcomeList['19:00'] = 'Good evening, %s';

$lang->block->gridOptions[8] = 'Left';
$lang->block->gridOptions[4] = 'Right';

$lang->block->flowchart   = array();
$lang->block->flowchart['admin']   = array('Administrator', 'Add Departments', 'Add Users', 'Maintain Privileges');
$lang->block->flowchart['product'] = array($lang->productCommon . ' Owner', 'Add ' . $lang->productCommon, 'Maintain Modules', 'Maintain Plans', 'Maintain Stories', 'Create Releases');
$lang->block->flowchart['project'] = array('Scrum Master', 'Add ' . $lang->projectCommon . 's', 'Maintain Teams', 'Link ' . $lang->productCommon . 's', 'Link Stories', 'Create Tasks');
$lang->block->flowchart['dev']     = array('Dev Team', 'Claim Tasks/Bugs', 'Update Status', 'Finish Tasks/Bugs');
$lang->block->flowchart['tester']  = array('Test Team', 'Write Cases', 'Run Cases', 'Report Bugs', 'Verify Bugs', 'Close Bugs');
