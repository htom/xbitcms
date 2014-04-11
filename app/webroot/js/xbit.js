/*
*
*/

var ContentsBody = $('body');

if(ContentsBody.find('div.header-top'))
{
	ContentsBody.css({
		'margin-top':'55px'
	});
}

if(ContentsBody.find('div.footer-bottom'))
{
	ContentsBody.css({
		'margin-bottom':'55px'
	})
}