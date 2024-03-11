<?php

namespace Daleffe\Phalcon\Forms\Element;

class MultiText extends \Phalcon\Forms\Element\AbstractElement
{
    public function render(array $attributes = NULL): string
    {
        $html = '';

        if (is_array($attributes)) {
            foreach ($attributes as $key => $value) $this->setAttribute($key, $value);
        } else { $attributes = $this->getAttributes(); }

        foreach ($this->getDefault() as $default) {
            // It is giving error, after the second invalid submit generate a new array of arrays, instead of an array of strings.
            if (is_array($default)) $default = $default[0];

            $html .= '<div class="control-group input-group ' . $attributes['div-class'] .'" style="margin-top:10px">';
            $html .= '<input type="text" name="' . $this->getName() . '" class="' . $attributes['class'] . '" placeholder="' . $attributes['placeholder'] . '" value="' . $default . '" />';
            $html .= '<div class="input-group-btn"> ';
            $html .= '<button class="btn btn-dark ' . $attributes['button-class'] . '" type="button"><i class="fas fa-minus"></i></button>';
            $html .= '</div></div>';
        }

        return $html;
    }
}