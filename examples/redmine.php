#!/usr/bin/env php
<?php
// see http://www.redmine.org/projects/redmine/wiki/Rest_Issues for API reference

require_once ('ActiveResource.php');
class RmIssue extends ActiveResource\ActiveResource {
    var $site = 'http://127.0.0.1:3000/';
    var $element_name = 'issue';
}
// get all issues assigned to a person
$issues = new RmIssue();
$issues = $issues->find(false, array('assigned_to' => 'Redmine Admin'));
print_r($issues);

?>
