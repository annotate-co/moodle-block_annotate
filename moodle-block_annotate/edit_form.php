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
/**
 * This file defines the edit form settings for this plugin
 *
 * @package block_annotate
 * @author Fokion Sotiropoulos (fokion@textensor.com)
 */
class block_annotate_edit_form extends block_edit_form {
	protected function specific_definition($mform) {
		$mform->addElement ( 'header', 'configheader', get_string ( 'annotate_edit_form_header', 'block_annotate' ) );
		
		$mform->addElement ( 'select', 'config_access', get_string ( 'annotate_edit_form_access', 'block_annotate' ), array (
				get_string ( 'annotate_edit_form_access_individual_option', 'block_annotate' ),
				get_string ( 'annotate_edit_form_access_group_option', 'block_annotate' ) 
		) );
		$mform->setDefault ( 'access', get_string ( 'annotate_edit_form_access_individual_option', 'block_annotate' ) );
		
		$mform->addElement ( 'text', 'config_shareuser', get_string ( 'annotate_edit_form_teacher', 'block_annotate' ), array (
				'size' => '30' 
		) );
		$mform->setDefault ( 'config_shareuser', '' );
		
		$mform->addHelpButton ( 'config_access', 'annotate_edit_form_access_group', 'block_annotate' );
		$mform->addHelpButton ( 'config_shareuser', 'annotate_edit_form_access_master', 'block_annotate' );
	}
}