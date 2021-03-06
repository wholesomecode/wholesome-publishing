<?php
/**
 * Block Draft.
 *
 * Load the PHP methods that support the block editor plugin within
 * /src/plugins/block-draft.
 *
 * @package wholesome_code/wholesome_publishing
 */

namespace WholesomeCode\WholesomePublishing\BlockDraft; // @codingStandardsIgnoreLine

/**
 * Setup
 *
 * - Remove block if set as draft.
 *
 * @return void
 */
function setup() : void {
	// Remove block if set as draft.
	add_filter( 'pre_render_block', __NAMESPACE__ . '\\remove_blocks_in_draft', 0, 2 );
}

/**
 * Remove Blocks in Draft.
 *
 * Remove blocks that are set as draft.
 *
 * @param mixed $pre_render If the block should render.
 * @param object $block The block.
 * @return mixed
 */
function remove_blocks_in_draft( $pre_render, $block ) {

	// If we are in the admin interface, bail.
	if ( is_admin() ) {
		return $pre_render;
	}

	// If the block is draft, do not render.
	if (
		isset( $block['attrs'] ) &&
		isset( $block['attrs']['isBlockDraft'] ) &&
		$block['attrs']['isBlockDraft']
	) {
		return false;
	}

	// Otherwise, render the block.
	return $pre_render;
}
