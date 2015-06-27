<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumeralsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('RomanNumerals');
    }

    function it_converts_to_roman_1_I()
    {
        $this->toRoman(1)->shouldReturn('I');
    }

    function it_converts_to_roman_3_III()
    {
        $this->toRoman(3)->shouldReturn('III');
    }

    function it_converts_to_roman_4_IV()
    {
        $this->toRoman(4)->shouldReturn('IV');
    }

    function it_converts_to_roman_5_V()
    {
        $this->toRoman(5)->shouldReturn('V');
    }

    function it_converts_to_roman_9_IX()
    {
        $this->toRoman(9)->shouldReturn('IX');
    }

    function it_converts_to_roman_12_XII()
    {
        $this->toRoman(12)->shouldReturn('XII');
    }

    function it_converts_to_roman_14_XIV()
    {
        $this->toRoman(14)->shouldReturn('XIV');
    }

    function it_converts_to_roman_19_XIX()
    {
        $this->toRoman(19)->shouldReturn('XIX');
    }

    function it_converts_to_roman_40_XL()
    {
        $this->toRoman(40)->shouldReturn('XL');
    }

    function it_converts_to_roman_44_XLIV()
    {
        $this->toRoman(44)->shouldReturn('XLIV');
    }

    function it_converts_to_roman_49_XLIX()
    {
        $this->toRoman(49)->shouldReturn('XLIX');
    }

    function it_converts_to_roman_74_LXXIV()
    {
        $this->toRoman(74)->shouldReturn('LXXIV');
    }

    function it_converts_to_roman_94_XCIV()
    {
        $this->toRoman(94)->shouldReturn('XCIV');
    }

    function it_converts_to_roman_494_CDXCIV()
    {
        $this->toRoman(494)->shouldReturn('CDXCIV');
    }

    function it_converts_to_roman_3620_MMMDCXX()
    {
        $this->toRoman(3620)->shouldReturn('MMMDCXX');
    }
    
    function it_converts_to_roman_4999_MMMMCMXCIX()
    {
        $this->toRoman(4999)->shouldReturn('MMMMCMXCIX');
    }
}
