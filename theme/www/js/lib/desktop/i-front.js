Util.Objects["front"] = new function() {
	this.init = function(scene) {

		scene.resized = function() {
//			u.bug("scene.resized:" + u.nodeId(this));
		}

		scene.scrolled = function() {
//			u.bug("scene.scrolled:" + u.nodeId(this))
		}

// Exercise 406: Amend frontpage by adding HTML to see that the front initializer works.
// These changes can only be seen when ?dev=1
		scene.ready = function() {
//			u.bug("scene.ready:" + u.nodeId(this));
			console.log("We are on the right page");
			u.qs("h1").innerHTML = "Janitor is NOT alive";
		}

		// scene is ready
		scene.ready();
	}
}
