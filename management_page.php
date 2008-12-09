<div class="wrap">
    <h2><?php echo __('Absolute Links'); ?></h2>

    <p>
    <span id="alp_re_scan_toscan"><?php echo $total_posts_pages ?></span> <?php echo __('posts and pages not processed')?>    
    <input type="submit" name="re_scan" value="<?php echo __('Scan') ?>" id="alp_re_scan_but" <?php if(!$total_posts_pages):?>disabled="disabled"<?php endif;?> class="button-secondary action" title="<?php echo __('Replace permalinks with absolute links in posts that have not been checked'); ?>" />
    <input type="submit" name="re_scan" value="<?php echo __('Scan ALL posts') ?>" id="alp_re_scan_but_all" class="button-secondary action"
        title="<?php echo __('Replace permalinks with absolute links in all blog posts'); ?>" />
    <img id="alp_ajx_ldr_1" src="<?php echo $this->plugin_url ?>/img/ajax-loader.gif" width="16" height="16" style="display:none" align="baseline" />
    </p>
    
    
    <h3><?php echo __('Broken Links'); ?></h3>
    <table class="widefat" width="100%" border="1">    
    <thead>
    <tr>
        <th scope="col"><?php echo __('Post/page') ?></th>
        <th scope="col"><?php echo __('Broken link') ?></th>
        <th scope="col"><?php echo __('Suggestions') ?></th>
    </tr>
    </thead>
    
    <?php if($this->broken_links): ?>
        <?php foreach($this->broken_links as $bl):  $links = unserialize($bl->links); ?>    
        <tr>
            <td rowspan="<?php echo count($links)+1 ?>" valign="top" style="background-color:#eee">
                <a title="Edit post" href="<?php echo get_edit_post_link($bl->ID) ?>"><?php echo $bl->post_title?></a>
            </td>
        </tr>     
        <?php foreach($links as $k=>$l): $incr++; ?>
        <tr>
        <td valign="top" id="alp_bl_<?php echo $incr ?>"><?php echo $k ?></td>       
        <td>
            <?php if($l['suggestions']): ?>
            <?php foreach($l['suggestions'] as $key=>$sug): ?>
            <?php echo $sug['perma'] . '<a class="alp_use_sug" id="alp_use_sug_'.$key.'_'.$bl->ID.'_'.$incr.'" href="javascript:;"> ('.__('use').')</a>' . '<br/>'; ?>
            <?php endforeach; ?>
            <?php else: ?>
            <?php echo __('No suggestions'); ?>
            <?php endif; ?>
         </td>
        </tr>       
        <?php endforeach ;?>
        <?php endforeach ;?>
    <?php else: ?>
        <tr><td colspan="3" align="center"><?php echo __('empty') ?></td></tr>
    <?php endif; ?>
    </table>
    
    <p>
    <?php echo __('Revert absolute urls to permalinks') ?> <input type="button" id="alp_revert_urls" value="<?php echo __('Start')?>" class="button-secondary action" <?php if(!$total_posts_pages_processed): ?>disabled="disabled"<?php endif; ?> 
    title="<?php echo __('Change absolute links back to Wordpress permalinks'); ?>" /> 
        <span id="alp_rev_items_left"><?php if($total_posts_pages_processed){ echo $total_posts_pages_processed; echo ' '; echo __('items in queue'); } ?></span>
        <img id="alp_ajx_ldr_2" src="<?php echo $this->plugin_url ?>/img/ajax-loader.gif" width="16" height="16" style="display:none" align="baseline" />
    </p>
    
</div>