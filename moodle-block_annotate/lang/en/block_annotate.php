<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle. If not, see <http://www.gnu.org/licenses/>.
$string ['block_annotate_version_number'] = '1.4';
$string ["block_annotate_version_date"] = '25-October-2015';
$string ['pluginname'] = 'Annotate connector';
$string ['annotate'] = 'Annotate';
$string ['annotate:addinstance'] = 'Add the Annotate block';

$string ['annotate_header_config'] = 'Annotate server settings';
$string ['annotate_header_description'] = 'Here you can edit the Api user and key in order to connect to an Annotate server.';
$string ['annotate_server_uri_lbl'] = 'Annotate Server URI';
$string ['annotate_server_uri_msg'] = 'Set this to your local Annotate server. ' . 'For testing, if you have a default Annotate installation on the same server as Moodle try "http://localhost/annotate".' . 'If both servers are on the same local subnetwork you can use their local ip addresses here to, as long as each is ' . 'configured to know its own address.';
$string ['annotate_server_uri_default'] = 'http://localhost/annotate';

$string ['annotate_api_user_lbl'] = 'API user email address';
$string ['annotate_api_user_msg'] = 'They allow accounts to be automatically created on the Annotate server when ' . 'a Moodle user follows an A.nnotate link. The API user field should contain the email id of an ' . 'Annotate server administrator as set in the Annotate configuration file. ';
$string ['annotate_api_user_default'] = '';

$string ['annotate_api_key_lbl'] = 'API key for the user';
$string ['annotate_api_key_msg'] = 'The API key can be found at the bottom of the account page when logged in to Annotate server administration page ';
$string ['annotate_api_key_default'] = '';

$string ['annotate_moodleId_lbl'] = 'Moodle Installation Identifier';
$string ['annotate_moodleId_msg'] = 'In order to separate the workspaces based on the location of the moodle.';

$string ['annotate_edit_form_header'] = 'Document sharing options';
$string ['annotate_edit_form_access'] = 'Access';
$string ['annotate_edit_form_access_individual_option'] = 'Individual';
$string ['annotate_edit_form_access_group_option'] = 'Group';
$string ['annotate_edit_form_access_group'] = "Document access options";
$string ['annotate_edit_form_access_group_help'] = 'With "Individual" access each user will get an independent instance of each resource they access and notes will be private unless they explicitly share the document in Annotate. With "Group" access there is one copy for the group which is owned by the specified Course Instructor. Students can still make private notes but they can also make Shared notes visible to other users.';

$string ['annotate_edit_form_access_master'] = 'Document ownership on Annotate';
$string ['annotate_edit_form_access_master_help'] = 'For "Group" access, the course instructor must fill the email address that is using for Annotate.';

