<?php
namespace App\Controllers\Elementor\Widgets;

use Elementor\Controls_Manager;
use ElementorPro\Base\Base_Widget;

class Button extends Base_Widget {
	public function get_name(): string
	{
		return 'Button';
	}
	
	public function get_categories() {
		return ['basic', 'orthocenter'];
	}
	
	public function get_title()
	{
		return __('Orthocenter Button');
	}
	
	public function get_icon(): string
	{
		return 'eicon-button';
	}
	
	private function render_content_controls(): void {
		$this->start_controls_section(
			'section_content',
			[
				'label'     => __('Content'),
				'tab'       => Controls_Manager::TAB_CONTENT
			]
		);
		
		$this->add_control(
			'text',
			[
				'label' => __('Text'),
				'type'  => Controls_Manager::TEXT,
			]
		);
		
		$this->end_controls_section();
	}
	
	protected function _register_controls(): void {
		$this->render_content_controls();
	}
}
