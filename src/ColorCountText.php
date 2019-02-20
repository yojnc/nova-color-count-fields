<?php

namespace Yojnc\Fields;

use Laravel\Nova\Fields\Text;

class ColorCountText extends Text
{
    
    use ColorCounterTrait;
    
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'color-count-text-field';

    /**
     * Create a new field.
     *
     * @param  string $name
     * @param  string|null $attribute
     * @param  mixed|null $resolveCallback
     * @return void
     */
    public function __construct($name, $attribute = null, $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);
        
        $this->setDataDefaults();
    }

    
}
