<?php

class CSSStyle {
    private $fontSize;
    private $fontColor;
    private $backgroundColor;
    private $borderStyle;
    private $borderWidth;

    public function setFontSize($size) {
        $this->fontSize = $size;
        return $this;
    }

    public function setFontColor($color) {
        $this->fontColor = $color;
        return $this;
    }

    public function setBackgroundColor($color) {
        $this->backgroundColor = $color;
        return $this;
    }

    public function setBorderStyle($style) {
        $this->borderStyle = $style;
        return $this;
    }

    public function setBorderWidth($width) {
        $this->borderWidth = $width;
        return $this;
    }

    public function applyTo($element) {
        // For the sake of the example, let's just echo the styles.
        echo "$element {\n";
        echo "    font-size: $this->fontSize;\n";
        echo "    color: $this->fontColor;\n";
        echo "    background-color: $this->backgroundColor;\n";
        echo "    border-style: $this->borderStyle;\n";
        echo "    border-width: $this->borderWidth;\n";
        echo "}\n";
    }
}

// Usage
$style = new CSSStyle();
$style->setFontSize('16px')
      ->setFontColor('#333')
      ->setBackgroundColor('#FFF')
      ->setBorderStyle('solid')
      ->setBorderWidth('1px')
      ->applyTo('.myElement');
?>