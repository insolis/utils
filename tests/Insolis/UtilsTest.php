<?php

namespace Insolis;

class UtilsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider slugifyDataProvider
     */
    public function testSlugify($input, $output)
    {
        $this->assertSame($output, Utils::slugify($input));
    }

    //---------------------- PROVIDERS ---------------------------------------------------------------------------------

    public function slugifyDataProvider()
    {
        return array(
            array("Béla", "bela"),
            array("Hosszú String Szóközökkel", "hosszu-string-szokozokkel"),
        );
    }
}
