<?php

namespace Hexters\Ladmin\Fields;

class PasswordInput extends Input {
  
  public function render($name, $value, $addon, $attributes) {
    $attr = $this->options($attributes);
    return view('ladmin::fields.password_input', compact(['name', 'value', 'addon', 'attr']));
  }

}