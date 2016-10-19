<?php 

if(Auth('memberof', 'community-member', 'group')){

?>
 container.appendChild(new Asset.image('https://firelight.geolive.ca/components/com_geolive/users_files/user_files_680/Uploads/[ImAgE]_oIv_Umn_[G]_WsM.png'));
<?php
}


if(Auth('memberof', 'lands-department', 'group')){

?>
 container.appendChild(new Asset.image('https://firelight.geolive.ca/components/com_geolive/users_files/user_files_680/Uploads/lpZ_1F4_6nd_[ImAgE]_[G].png'));
<?php
}

if(Auth('memberof', 'proponent', 'group')){


?>
 container.appendChild(new Asset.image('https://firelight.geolive.ca/components/com_geolive/users_files/user_files_680/Uploads/[G]_gVG_[ImAgE]_Dn_kmf.png'));
<?php
}
?>