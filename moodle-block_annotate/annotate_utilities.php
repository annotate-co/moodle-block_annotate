<?php

/**
 * Repository method to serve the referenced file
 *
 * @see send_stored_file
 *
 * @param stored_file $storedfile the file that contains the reference
 * @param int $lifetime Number of seconds before the file should expire from caches (null means $CFG->filelifetime)
 * @param int $filter 0 (default)=no filtering, 1=all files, 2=html files only
 * @param bool $forcedownload If true (default false), forces download of file rather than view in browser/plugin
 * @param array $options additional options affecting the file serving
 */
function send_file($storedfile, $lifetime = null , $filter = 0, $forcedownload = false, array $options = null) {
	$reference = $this->unpack_reference($storedfile->get_reference());
	try {
		$fileinfo = $this->get_file($storedfile->get_reference());
		if (isset($fileinfo['path'])) {
			$fs = get_file_storage();
			list($contenthash, $filesize, $newfile) = $fs->add_file_to_pool($fileinfo['path']);
			// Set this file and other similar aliases synchronised.
			$storedfile->set_synchronized($contenthash, $filesize);
		} else {
			throw new \moodle_exception('errorwhiledownload', 'repository_office365');
		}
		if (!is_array($options)) {
			$options = [];
		}
		$options['sendcachedexternalfile'] = true;
		send_stored_file($storedfile, $lifetime, $filter, $forcedownload, $options);
	} catch (\Exception $e) {
		send_file_not_found();
	}
}