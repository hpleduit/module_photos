<?php

/**
 * @Project NUKEVIET 4.x
 * @Author KENNY NGUYEN (nguyentiendat713@gmail.com) 
 * @Copyright (C) 2015 tradacongnghe.com. All rights reserved
 * @Based on NukeViet CMS 
 * @License GNU/GPL version 2 or any later version
 * @Createdate  Wed, 21 Jan 2015 14:00:59 GMT
 */

if( ! defined( 'NV_IS_FILE_ADMIN' ) ) die( 'Stop!!!' );

$name = $nv_Request->get_title( 'name', 'post', '' );
$alias = strtolower( change_alias( $name ) );

$id = $nv_Request->get_int( 'id', 'post', 0 );
$mod = $nv_Request->get_string( 'mod', 'post', '' );

if( $mod == 'category' )
{
	$tab = TABLE_PHOTO_NAME . '_category';
	$stmt = $db->prepare( 'SELECT COUNT(*) FROM ' . $tab . ' WHERE category_id!=' . $id . ' AND alias= :alias' );
	$stmt->bindParam( ':alias', $alias, PDO::PARAM_STR );
	$stmt->execute();
	$nb = $stmt->fetchColumn();
	if( ! empty( $nb ) )
	{
		$nb = $db->query( 'SELECT MAX(category_id) FROM ' . $tab )->fetchColumn();

		$alias .= '-' . ( intval( $nb ) + 1 );
	}
}
elseif( $mod == 'album' )
{
	$tab = TABLE_PHOTO_NAME . '_album';
	$stmt = $db->prepare( 'SELECT COUNT(*) FROM ' . $tab . ' WHERE album_id !=' . $id . ' AND alias= :alias' );
	$stmt->bindParam( ':alias', $alias, PDO::PARAM_STR );
	$stmt->execute();
	$nb = $stmt->fetchColumn();
	if( ! empty( $nb ) )
	{
		$nb = $db->query( 'SELECT MAX(album_id) FROM ' . $tab )->fetchColumn();

		$alias .= '-' . ( intval( $nb ) + 1 );
	}
}
elseif( $mod == 'folder' )
{
	$tab = TABLE_PHOTO_NAME . '_album';
	$stmt = $db->prepare( 'SELECT COUNT(*) FROM ' . $tab . ' WHERE album_id !=' . $id . ' AND alias= :alias' );
	$stmt->bindParam( ':alias', $alias, PDO::PARAM_STR );
	$stmt->execute();
	$nb = $stmt->fetchColumn();
	if( ! empty( $nb ) )
	{
		$nb = $db->query( 'SELECT MAX(album_id) FROM ' . $tab )->fetchColumn();

		$alias .= '-' . ( intval( $nb ) + 1 );
	}
}
 

include NV_ROOTDIR . '/includes/header.php';
echo strtolower( $alias );
include NV_ROOTDIR . '/includes/footer.php';