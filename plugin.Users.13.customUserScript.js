if(Core::Client()->isGuest()){
   return false;
}


Core::LoadPlugin('Attributes');
$attributeMap=array();
$attribs=AttributesRecord::GetFields(Core::Client()->getUserId(), 'user', array('isCommunityMember', 'isLandsDepartment', 'isProponent'), 'userAttributes');

if($attribs['isCommunityMember']==='true'&&$group==='community-member'){
return true;
}

if($attribs['isLandsDepartment']==='true'&&$group==='lands-department'&&Core::Client()->isAdmin()){
return true;
}

if($attribs['isProponent']==='true'&&$group==='proponent'){
return true;
}

if($group==='no-role'&&($attribs['isCommunityMember']!=='true'&&$attribs['isLandsDepartment']!=='true'&&$attribs['isProponent']!=='true')){
  return true;
}

return false;