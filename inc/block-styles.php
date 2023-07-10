<?php

if ( function_exists( 'register_block_style' ) ) {

	function theme_register_block_styles() {

		//Scale filter
		register_block_style(
			'core/image',
			array(
				'name'  => 'scale-100-130',
				'label' => esc_html__( 'Scale 100→130' ),
			)
		);

		// Brightness filter
		register_block_style(
			'core/image',
			array(
				'name'  => 'bright-70-100',
				'label' => esc_html__( 'Bright 70→100' ),
			)
		);

		register_block_style(
			'core/image',
			array(
				'name'  => 'bright-100-80',
				'label' => esc_html__( 'Bright 100→80' ),
			)
		);

		register_block_style(
			'core/image',
			array(
				'name'  => 'bright-100-120',
				'label' => esc_html__( 'Bright 100→120' ),
			)
		);

		// AinoBlocks Button Neutral Primary
		register_block_style(
			'ainoblocks/button',
			array(
				'name'  => 'neutral-primary',
				'label' => esc_html__( 'Neutral Primary' ),
			)
		);

		// AinoBlocks Button Outline Neutral
		register_block_style(
			'ainoblocks/button',
			array(
				'name'  => 'neutral-outline',
				'label' => esc_html__( 'Neutral Outline' ),
			)
		);

		// AinoBlocks Button Ghost Neutral
		register_block_style(
			'ainoblocks/button',
			array(
				'name'  => 'neutral-ghost',
				'label' => esc_html__( 'Neutral Ghost' ),
			)
		);

		// AinoBlocks Button Ghost Neutral
		register_block_style(
			'ainoblocks/button',
			array(
				'name'  => 'neutral-text',
				'label' => esc_html__( 'Neutral Text' ),
			)
		);

		// AinoBlocks Button tab-pill
		register_block_style(
			'ainoblocks/button',
			array(
				'name'  => 'tab-fill',
				'label' => esc_html__( 'Tab Fill' ),
			)
		);
	}
	add_action( 'init', 'theme_register_block_styles' );
}
