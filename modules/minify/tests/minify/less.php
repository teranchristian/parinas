<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Tests for the less minifier.
 * 
 * @package Minify
 * @category Tests
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 */
class Minify_LESS_Test extends Unittest_TestCase {

    /**
     * An less example from Bootstrap web framework.
     * @var string
     */
    private $less_example = "
        // Parent container
        .accordion {
          margin-bottom: @baseLineHeight;
        }

        // Group == heading + body
        .accordion-group {
          margin-bottom: 2px;
          border: 1px solid #e5e5e5;
          .border-radius(@baseBorderRadius);
        }
        .accordion-heading {
          border-bottom: 0;
        }
        .accordion-heading .accordion-toggle {
          display: block;
          padding: 8px 15px;
        }

        // General toggle styles
        .accordion-toggle {
          cursor: pointer;
        }

        // Inner needs the styles because you can't animate properly with any styles on the element
        .accordion-inner {
          padding: 9px 15px;
          border-top: 1px solid #e5e5e5;
        }
    ";

    public function test_minify_input() {
        Minify::factory('less')->minify_input($this->less_example);
    }

    /**
     * @todo a test that validates the css output
     */
    public function test_lessphp() {
        // Minify a less input  
        Minify_Driver::factory("lessphp")->minify($this->less_example);
    }

}

?>