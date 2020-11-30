<!DOCTYPE html>
<html>
<?php get_header(); ?>
<body>
<h1><?php bloginfo( 'name' ); ?></h1>
<h2><?php bloginfo( 'description' ); ?></h2>
     <ul id="starlist">
      <li><a href="index.php">首页</a></li>
      <li><a href="share.php">相册</a></li>
      <li><a href="list.php">博文</a></li>
      <li><a href="about.php">关于</a></li>
     </ul>
<?php get_footer(); ?>
</body>
</html>