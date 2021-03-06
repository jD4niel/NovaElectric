<?php

namespace ots_pro;
?>

<?php get_header(); ?>

<div class="sc-single-wrapper container">

    <div class="row">
    
        <?php while (have_posts()) : the_post(); ?>

            <div class="sc_team_single_member" itemscope itemtype="http://schema.org/Person">

                <div class="col-sm-8 col-sm-push-4">
                    
                    <div class="single-member-wrap">
                        
                        <div class="tyros-avatar-wrap desktop-hidden" style="background-image: url(<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'large' ) ); ?>);">
                        </div>

                        <h2 class="name" itemprop="name"><?php echo the_title(); ?></h2>
                        <h3 class="title" itemprop="jobtitle"><?php echo get_post_meta(get_the_ID(), 'team_member_title', true); ?></h3>
                        
                        <hr>

                        <?php the_content(); ?>
                        
                        <?php if (get_option(\ots\Options::SHOW_SINGLE_SOCIAL) == 'on') : ?>

                            <div class="social">

                                <?php \ots\do_member_social_links(); ?>

                            </div>

                        <?php endif; ?>

                    </div>
                    
                </div>
                
                <div class="col-sm-4 col-sm-pull-8">
                    
                    <div class="tyros-avatar-wrap mobile-hidden" style="background-image: url(<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'large' ) ); ?>);">
                    </div>
                    
                    <div class="single-member-sidebar">

                        <?php $quote = get_post_meta(get_the_ID(), 'team_member_quote', true); ?>

                        <?php if (!empty($quote)) : ?>

                            <div class="sc_personal_quote">
                                <span class="sc_team_icon-quote-left"></span>
                                <span class="sc_personal_quote_content"><?php esc_html_e($quote); ?></span>
                            </div>

                        <?php endif; ?>

                        <?php if (get_post_meta(get_the_ID(), 'team_member_article_bool', true) == 'on') : ?>

                            <div class="articles">

                                <h4 class="single-member-article-heading">
                                    <?php esc_html_e( get_post_meta( get_the_ID(), 'team_member_article_title', true ) ); ?>
                                </h4>

                                <div class="sc_member_articles">

                                    <?php foreach (\ots\get_member_articles() as $article) : ?>

                                        <div class="article">

                                            <a href="<?php the_permalink($article); ?>"><?php echo get_the_title($article); ?></a>

                                        </div>

                                    <?php endforeach; ?>

                                    <div class="clear"></div>

                                </div>

                            </div>

                        <?php endif; ?>
                        
                        <?php if (get_post_meta(get_the_ID(), 'team_member_skill_bool', true) == 'on') : ?>
                        
                            <div class="sc_team_single_skills">

                                <h4 class="single-member-skills-heading">
                                    <?php esc_html_e(get_post_meta(get_the_ID(), 'team_member_skill_title', true)); ?>
                                </h3>

                                <?php do_member_skills(); ?>

                            </div>

                        <?php endif; ?>
                        
                        <?php if (get_post_meta(get_the_ID(), 'team_member_tags_bool', true) == 'on') : ?>

                            <div class="sc-tags">

                                <h4 class="single-member-skills-heading">
                                    <?php esc_html_e(get_post_meta(get_the_ID(), 'team_member_tags_title', true)); ?>
                                </h4>

                                <?php $tags = explode(',', get_post_meta(get_the_ID(), 'team_member_tags', true)); ?>

                                <?php foreach ($tags as $tag) : ?>

                                    <span class="sc-single-tag"><?php esc_html_e($tag); ?></span>

                                <?php endforeach; ?>

                            </div>

                        <?php endif; ?>

                    </div>
                    
                </div>
                
                
                
            </div>

        <?php endwhile; ?>

    </div>
    
</div>

<?php
get_footer();
