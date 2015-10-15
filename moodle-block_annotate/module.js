M.block_annotate = {};
//This function adds the annotate button on every resource.
M.block_annotate.init = function(Y, targets, rt) {

	var activated = false;
	var root = rt;

	Y.on("domready", activate);

	function activate() {

		// only run once
		if (activated) {
			return;
		}
		activated = true;
		//topics that contain a div with class content and it contains a link to a resource
		var resources = Y.all('ul.topics div.content a');
		var length = resources.length;
		for (var i = 0; i < length; i++) {
		
		}
			
	}
	
	
}


