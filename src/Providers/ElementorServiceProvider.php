<?php
namespace App\Providers;


use Elementor\Elements_Manager;

class ElementorServiceProvider
{
    protected $widgets;
    public function __construct()
    {
        $providers     = include get_stylesheet_directory() . '/src/config/elementor.php';
        $this->widgets = $providers['widgets'];
        $this->boot();
    }
    
    public function boot(): void
    {
	    add_action( 'elementor/elements/categories_registered', [$this, 'add_elementor_widget_categories'] );
    	$this->register();
    }
	
	public function register(): void
	{
		foreach ($this->widgets as $widget) {
			add_action('elementor/widgets/widgets_registered', static function () use ($widget) {
				\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new $widget());
			});
		}
    }
    
    public function add_elementor_widget_categories(Elements_Manager $elements_manager) {
	    $elements_manager->add_category(
		    'orthocenter',
		    [
			    'title' => 'Orthocenter',
			    'icon' => 'fas fa-teeth-open',
		    ]
	    );
    }
}
