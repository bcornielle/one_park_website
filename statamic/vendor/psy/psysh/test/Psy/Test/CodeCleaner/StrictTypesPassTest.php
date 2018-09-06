<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2015 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\Test\CodeCleaner;

use Psy\CodeCleaner\StrictTypesPass;

class StrictTypesPassTest extends CodeCleanerTestCase
{
    public function setUp()
    {
        if (version_compare(PHP_VERSION, '7.0', '<')) {
            $this->markTestSkipped();
        }

        $this->setPass(new StrictTypesPass());
    }

    public function testProcess()
    {
        $this->assertProcessesAs('declare(strict_types=1)', 'declare (strict_types=1);');
        $this->assertProcessesAs('null', "declare (strict_types=1);\nnull;");
        $this->assertProcessesAs('declare(strict_types=0)', 'declare (strict_types=0);');
        $this->assertProcessesAs('null', 'null;');
    }

    /**
     * @dataProvider invalidDeclarations
     * @expectedException \Psy\Exception\FatalErrorException
     */
    public function testInvalidDeclarations($declaration)
    {
        $stmts = $this->parse($declaration);
        $this->traverser->traverse($stmts);
    }

    public function invalidDeclarations()
    {
        return array(
            array('declare(strict_types=-1)'),
            array('declare(strict_types=2)'),
            array('declare(strict_types="foo")'),
        );
    }
}
