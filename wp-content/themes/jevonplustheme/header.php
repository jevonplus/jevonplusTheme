<?php
?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<title>Jevonplus 的博客</title>

	</head>

	<body <?php body_class(); ?>>

	<div>
		<style>
	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    position: fixed;
    top: 0;
    width: 100%;
}
li
{
    float:left;
    border-right: 1px solid #bbb;
}
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
li:last-child {
    border-right: none;
}
.active {
    background-color: #4CAF50;
}
/*鼠标移动到选项上修改背景颜色 */
li a:hover {
    background-color: #111;
}
a
{
    display:block;
    width:60px;
}

	</style>
    <ul id="starlist">
      <li><a href="index.php">首页</a></li>
      <li><a href="share.php">相册</a></li>
      <li><a href="list.php">博文</a></li>
      <li><a href="about.php">关于</a></li>
      <li><a href="gbook.php">留言</a></li>
    </ul>
    <div>