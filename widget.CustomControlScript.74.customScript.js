<?php 

if(Auth('memberof', 'community-member', 'group')){
 container.appendChild(new Element('div',{html:'c'}));
}


if(Auth('memberof', 'lands-department', 'group')){
 container.appendChild(new Element('div',{html:'d'}));
}

if(Auth('memberof', 'proponent', 'group')){
 container.appendChild(new Element('div',{html:'p'}));
}
?>