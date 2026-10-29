<?php
variables([
	VARLinkToSectionHome => true,
	VAREmail => 'srisaivenkatcc@gmail.com',
	VARPhone => $ph = '+919940668390',
	VARWhatsapp => whatsapp_clean($ph),
	socialBuilder::variableName => socialBuilder::create()
		->addInstagram('srisaivenkat.cc', 'SSVCC')
		->addHR()
		->addBuiltin()
		//->addDawn()->addImranPersonal()
		->getItems(),
	replacer::siteReplaces => [
		'CommonLongTail' => site::$current->siteName . ', tuitions, 12th exams, board exams, student preparation',
	],
]);

if (nodeIs(SITEHOME))
	setHtmlVariable(VARWelcomeMessage, getSnippet('welcome'));

function site_before_render() {
	autosetPageMenu([VARDontOverwriteLogo => true]);
}
