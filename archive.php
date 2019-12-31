<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="container home d-flex">
  <!-- <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h3> -->
  <div class="home-bar">
    <ul>
      <li><a href="<?php $this->options->siteUrl();?>">最新内容</a></li>
      <li><a href="<?php $this->options->siteUrl();?>">热门推荐</a></li>
    </ul>
    <div class="home-bar_line">分类<i></i></div>

    <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
  </div>
  <div class="home-list" role="main">
    <?php if ($this->have()): ?>
    <?php while($this->next()): ?>
    <?php $this->need('post-item.php'); ?>
    <?php endwhile; ?>
    <?php else: ?>
    <article class="post">
      <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
    </article>
    <?php endif; ?>
    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
  </div><!-- end #main-->
  <div class="home-sidebar">
    <?php $this->need('sidebar.php'); ?>
  </div>
</div><!-- end #main -->

<?php $this->need('footer.php'); ?>