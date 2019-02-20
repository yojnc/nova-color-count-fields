<?php

namespace Yojnc\Fields;

use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;

class ColorCountTextArea extends Textarea
{
    use ColorCounterTrait;
    
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'color-count-text-area-field';

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
