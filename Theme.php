<?php

namespace Shopware\Themes\Hegelmann;

use Shopware\Components\Form as Form;
use Shopware\Components\Plugin;

class Theme extends \Shopware\Components\Theme
{
    protected $extend = 'Responsive';

    protected $name = <<<'SHOPWARE_EOD'
Hegelmann Trucks and Parts
SHOPWARE_EOD;

    protected $description = <<<'SHOPWARE_EOD'

SHOPWARE_EOD;

    protected $author = <<<'SHOPWARE_EOD'
Imran Bajwa
SHOPWARE_EOD;

    protected $license = <<<'SHOPWARE_EOD'
Abona Deutschland GmbH
SHOPWARE_EOD;
    protected $discardedLessThemes = [\Shopware\Themes\Responsive\Theme::class];

    /** @var array Defines the files which should be compiled by the javascript compressor */
    /*protected $css = array(
        'src/styles/bootstrap4/bootstrap.min.css',
        'src/plugins/font-awesome-4.7.0/css/font-awesome.min.css',
        'src/plugins/OwlCarousel2-2.2.1/owl.carousel.css',
        'src/plugins/OwlCarousel2-2.2.1/owl.theme.default.css',
        'src/plugins/OwlCarousel2-2.2.1/animate.css',
        'src/css/main_styles.css',
        'src/styles/responsive.css'
    );*/

    /** @var array Defines the files which should be compiled by the javascript compressor */
    protected $javascript = array(
        'src/js/jquery-3.2.1.min.js',
        'src/styles/bootstrap4/popper.js',
        'src/styles/bootstrap4/bootstrap.min.js',
        'src/plugins/greensock/TimelineMax.min.js',
        'src/plugins/scrollmagic/ScrollMagic.min.js',
        'src/plugins/greensock/animation.gsap.min.js',
        'src/plugins/greensock/ScrollToPlugin.min.js',
        'src/plugins/OwlCarousel2-2.2.1/owl.carousel.js',
        'src/plugins/Isotope/isotope.pkgd.min.js',
        'src/plugins/easing/easing.js',
        'src/plugins/parallax-js-master/parallax.min.js',
        'src/js/custom.js'
    );




    public function createConfig(Form\Container\TabContainer $container)
    {
        $fieldset = $this->createFieldSet(
            'my_custom_settings',
            'My custom settings'
        );

        $textField = $this->createTextField(
          'basic_font_size',
            'Basic font size',
            '16px'
        );
        // Create the color picker field
        $colorPickerField = $this->createColorPickerField(
            'custom-color-main',
            'Main color',
            '#62b74b'
        );
        // Adding the fields to the fieldset
        $fieldset->addElement($textField);
        $fieldset->addElement($colorPickerField);

        $tab = $this->createTab(
            'my_custom_tab',
            'My custom tab'
        );

        $tab->addElement($fieldset);

        $container->addTab($tab);
    }
}