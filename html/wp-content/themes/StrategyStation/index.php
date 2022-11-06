<?php get_header(); ?>

<div class="wrap contentclass" role="document">
    <div id="pageheader" class="titleclass">
        <div class="container">
            <div class="page-header">
                <h1 class="entry-title" itemprop="name">
                    <?php the_title(); ?>
                </h1>
            </div>
        </div><!--container-->
    </div><!--titleclass-->
    <div id="content" class="container container-contained">
        <div class="row">
            <div class="main col-lg-9 col-md-8" role="main">
                <div class="entry-content" itemprop="mainContentOfPage" itemscope itemtype="https://schema.org/WebPageElement">
                    <?php the_content(); ?>
                </div>
            </div><!-- /.main -->
            <?php get_sidebar(); ?>
        </div><!-- /.row-->
    </div><!-- /.content -->
</div><!-- /.wrap -->

<?php get_footer(); ?>
