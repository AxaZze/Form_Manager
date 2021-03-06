<?php
namespace App\Type;

class TextareaType implements TypeInterface
{
    public function build(object $field): string
    {
        return '<textarea name="'.$field->name.'" required id="'.$field->name.'"></textarea>';
    }
}