<?php
/**
 * Title: Affichage des Articles
 * Slug: softech/display-articles
 * Categories: articles
 *
 * @package Softech
 * @subpackage Softech
 * @since Softech 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"7.5rem","bottom":"7.5rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:7.5rem;padding-bottom:7.5rem"><!-- wp:group {"metadata":{"categories":["posts"],"patternName":"core/query-offset-posts","name":"Décalage"},"align":"wide","style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:query {"queryId":13,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-date /-->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->