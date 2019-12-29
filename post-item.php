<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<article itemscope itemtype="http://schema.org/BlogPosting" class="p-item">
	<a class="no-underline" href="<?php $this->permalink() ?>">
    <h3 class="p-item-title" itemprop="name headline">
    <?php $this->title() ?>
    </h3>
    <div class="p-item-content" itemprop="articleBody">
    <?php $this->excerpt(100, '...') ?>
    </div>
    <ul class="p-item-meta d-flex">
      <li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
      <li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
      <li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
      <li itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
    </ul>
  </a>
</article>	
