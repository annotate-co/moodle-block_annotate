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
 * This file defines the admin settings for this plugin
 * 
 * @package block_annotate
 * @author Fokion Sotiropoulos (fokion@textensor.com)
 */
defined ( 'MOODLE_INTERNAL' ) || die ();
class block_annotate extends block_base {
	public function init() {
		$this->title = get_string ( "Annotate", "block_annotate" );
	}
	public function get_content() {
		if ($this->content !== NULL) {
			return $this->content;
		}
		$this->content = $this->_get_content ();
		return $this->content;
	}
	/**
	 * Get the content of the block.
	 *
	 * @return stdObject
	 */
	private function _get_content() {
		global $USER, $COURSE, $PAGE;
		
		$action = optional_param ( 'action', '', PARAM_TEXT );
		$content = new stdClass ();
		$content->text = '';
		$content->footer = '';
		
		$jsmodule = array (
				'name' => 'block_annotate',
				'fullpath' => '/blocks/block_annotate/module.js',
				'requires' => array (),
				'strings' => array () 
		);
		$arguments = array (
				array (
						$this->instance->id 
				),
				array (
						$USER->id 
				) 
		);
		$this->page->requires->js_init_call ( "M.block_annotate.init", $arguments, false, $jsmodule );
		
		return $content;
	}
	public function has_config() {
		return true;
	}
	public function instance_allow_multiple() {
		return false;
	}
	public function applicable_formats() {
		return array (
				'course-view-*' => true 
		);
	}
}