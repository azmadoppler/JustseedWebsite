var stats_key="514184057";
var stats_domain='upic.me';
var stats_uid='3049';
var stats_uname='3049';
var use_ssl = 'https:' == document.location.protocol;
if(typeof(parent.document) != 'undefined')
{
	if(typeof(parent.stats_init) == 'undefined')
	{
		parent.stats_init = true;
		document.write("<script src='" + document.location.protocol + "//static.stats.in.th/tracker.js'></script>");
	}
}
else if(typeof(stats_init) == 'undefined')
{
	var stats_init = true;
	document.write("<script src='" + document.location.protocol + "//static.stats.in.th/tracker.js'></script>");
}