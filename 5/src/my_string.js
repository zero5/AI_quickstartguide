//OpenRedirect
mymodule.redirect = function (custom_req, custom_res) {
	if (custom_req.query.url) {
		custom_res.some_redirect(custom_req.query.url)
	} else {
		custom_res.send('invalid redirect url')
	}
}