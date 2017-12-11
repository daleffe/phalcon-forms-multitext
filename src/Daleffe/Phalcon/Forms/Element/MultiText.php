<?php

namespace Daleffe\Phalcon\Forms\Element;

class MultiText extends \Phalcon\Forms\Element
{
    public function render($attributes = [])
    {   
        $html = '';

        if (is_array($attributes)) {
            foreach ($attributes as $key => $value) {
                $this->setAttribute($key, $value);
            }
        } else {
            $attributes = $this->getAttributes();
        }

        var_dump($attributes);
        die();

        /*foreach ($attributes['elements'] as $key => $value) {
            $checked = ($key == $this->getValue()) ? ' checked' : null;

            $html .= '<div class="' . $attributes['class'][$key] . '">';
            $html .= '<input type="radio" id="' . $this->getName() . $key . '" name="' . $this->getName() . '" value="' . $key . '"' . $checked . ' />';
            $html .= '<label for="' . $this->getName() . $key . '">' . $value . '</label>';
            $html .= "</div>";
        }*/

        return $html;
    }
}