<?php
/**
 * 这是 Typecho 0.9 系统的一套默认皮肤
 * 
 * @package Chanx 
 * @author Jayken
 * @version 1.2
 * @link http://typecho.org
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="container home d-flex">
  <div class="home-bar">
    <ul>
      <li><a href="<?php $this->options->siteUrl();?>">最新内容</a></li>
      <li><a href="<?php $this->options->siteUrl('/1');?>">热门推荐</a></li>
    </ul>
    <div class="home-bar_line">分类<i></i></div>
    <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
  </div>
  <div class="home-list" role="main">
    <?php while($this->next()): ?>
    <?php $this->need('post-item.php'); ?>
    <?php endwhile; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
  </div><!-- end #main-->

  <div class="home-sidebar">
    <?php $this->need('sidebar.php'); ?>
  </div>
</div>
<?php $this->need('footer.php'); ?>