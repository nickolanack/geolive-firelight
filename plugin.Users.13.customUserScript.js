Core::LoadPlugin('Attributes');
$attributeMap=array();
$attribs=AttributesRecord::GetFields(Core::Client()->getUserId(), 'user', array('isCommunityMember', 'isLandsDepartment', 'isProponent'), 'userAttributes');

if($attribs['isCommunityMember']==='true'&&$group==='communty-member'){
return true;
}

if($attribs['isLandsDepartment']==='true'&&$group==='lands-department'){
return true;
}

if($attribs['isProponent']==='true'&&$group==='proponent'){
return true;
}

return false;