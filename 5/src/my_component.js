#My Vulnerable Component 1.0.0
//OpenRedirect
mymodule.redirect = function (custom_req, custom_res) {
	if (custom_req.query.url) {
		custom_res.comp_redirect(custom_req.query.url)
	} else {
		custom_res.send('invalid redirect url')
	}
}