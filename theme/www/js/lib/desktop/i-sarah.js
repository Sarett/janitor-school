Util.Objects["sarah"] = new function() {
	this.init = function(scene) {

		scene.resized = function() {

		}

		scene.scrolled = function() {

		}

		scene.ready = function() {
			console.log("Scene in Sarah's template is ready");
		}

		scene.ready();
	}
}
