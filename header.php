<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
?>
<!DOCTYPE HTML>
<html class="no-js">

<head>
  <meta charset="<?php $this->options->charset();?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="renderer" content="webkit">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title><?php $this->archiveTitle(array(
    'category' => _t('分类 %s 下的文章'),
    'search' => _t('包含关键字 %s 的文章'),
    'tag' => _t('标签 %s 下的文章'),
    'author' => _t('%s 发布的文章'),
), '', ' - ');?><?php $this->options->title();?></title>

  <!-- 使用url函数转换相关路径 -->
  <link rel="stylesheet" href="//at.alicdn.com/t/font_1492748_49lgouc201n.css">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/markdown.css');?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/index.css');?>">

  <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

  <!-- 通过自有函数输出HTML头部信息 -->
  <?php $this->header();?>
</head>

<body>
  <!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>');?>.</div>
<![endif]-->

  <header class="header box-shadow">
    <div class="container header-wrap d-flex">
      <div class="d-flex">
        <h1 class="header-logo">
          <a href="<?php $this->options->siteUrl();?>">
            <img src="<?php $this->options->themeUrl('assets/img/logo.png')?>"
              alt="<?php $this->options->title()?> - <?php $this->options->description()?>">
          </a>
        </h1>
        <nav class="header-nav" role="navigation">
          <a class="m-2 <?php if ($this->is('index')): ?>current<?php endif;?>"
            href="<?php $this->options->siteUrl();?>">
            <?php _e('首页');?></a>
          <?php $this->widget('Widget_Contents_Page_List')->to($pages);?>
          <?php while ($pages->next()): ?>
          <a class="m-2 <?php if ($this->is('page', $pages->slug)): ?>current<?php endif;?>"
            href="<?php $pages->permalink();?>" title="<?php $pages->title();?>"><?php $pages->title();?></a>
          <?php endwhile;?>
        </nav>
      </div>
      <div class="d-flex">
        <form class="header-search mr-3" method="post" action="<?php $this->options->siteUrl();?>" role="search">
          <label for="s" class="sr-only"><?php _e('搜索关键字');?></label>
          <input type="text" id="s" name="s" class="header-search_input" placeholder="<?php _e('输入关键字搜索');?>" />
          <button type="submit" class="header-search_submit"><?php _e('搜索');?></button>
        </form>
        <div class="header-user">
          <?php if($this->user->hasLogin()): ?>
            <div style="margin-bottom: 100px" class="d-flex flex-justify-end">
                <details class="dropdown details-reset details-overlay d-inline-block">
                <summary class="header-user_summary" aria-haspopup="true">
                    <?php $this->user->screenName(); ?>
                    <div class="dropdown-caret"></div>
                </summary>

                <ul class="header-user_drop dropdown-menu dropdown-menu-sw">
                    <li><a class="dropdown-item" href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?></a></li>
                    <li><a class="dropdown-item" href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出登录'); ?></a></li>
                </ul>
                </details>
            </div>
          <?php else: ?>
          <a href="<?php $this->options->adminUrl('login.php'); ?>">
            <button class="header-user_btn">登录</button>
          </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </header>