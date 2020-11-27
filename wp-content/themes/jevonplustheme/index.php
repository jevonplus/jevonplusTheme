<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
<?php wp_head(); ?>
</head>
<body>
    <ul id="starlist">
      <li><a href="index.php">首页</a></li>
      <li><a href="share.php">相册</a></li>
      <li><a href="list.php">博文</a></li>
      <li><a href="about.php">关于</a></li>
      <li><a href="gbook.php">留言</a></li>
    </ul>
<?php wp_footer(); ?>
<p>Design by <a href="http://www.jevonplus.cn" target="_blank">Jevonplus个人博客</a> <a href="http://beian.miit.gov.cn/">京ICP备2020041729号-1</a></p>
			</footer><!-- #site-footer -->
</body>
</html>