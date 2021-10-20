  var utm_source = location.search.match(/&utm_source=(.+)[$|&]/);
  var utm_medium = location.search.match(/&utm_medium=(.+)[$|&]/);
  var utm_term = location.search.match(/&utm_term=(.+)[$|&]/);
  var utm_content = location.search.match(/&utm_content=(.+)[$|&]/);
  var utm_campaign = location.search.match(/&utm_campaign=(.+)[$|&]/);
  var subid = '';
  var res = location.search.match(/&subid=(.+)[$|&]/);
  if (res && res[1]) {
  subid = '/' + res[1];
  }


function mleadsLinkReplacing() {
 var mleads_sess = (location.href.match(/mleads=([a-z0-9A-Z]{16,64})/) || {1:''})[1];
 var mleads_code = (location.href.match(/code=([a-z0-9A-Z]{4,16})/) || {1:''})[1];
flow_url = 'http://c.cpam.pro/T'+mleads_code;
 if(mleads_sess !== '' && mleads_code !== '') {
  var elems = document.getElementsByTagName('a');
  for(var i=0; i<elems.length; i++) {
    elems[i].removeAttribute('target');
    elems[i].href='http://c.cpam.pro/T' + mleads_code + subid + '?mleads='+mleads_sess + (utm_source && utm_source[1] ? '&utm_source=' + utm_source[1] : '') + (utm_medium && utm_medium[1] ? '&utm_medium=' + utm_medium[1] : '') + (utm_term && utm_term[1] ? '&utm_term=' + utm_term[1] : '') + (utm_content && utm_content[1] ? '&utm_content=' + utm_content[1] : '') + (utm_campaign && utm_campaign[1] ? '&utm_campaign=' + utm_campaign[1] : '');
  }
 }
}
mleadsLinkReplacing();
window.onload = function() {
 mleadsLinkReplacing();
};