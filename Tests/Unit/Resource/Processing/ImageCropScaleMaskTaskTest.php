<?php
namespace Arndtteunissen\ImproveProcessedFilename\Tests\Unit\Resource\Processing;

/*
 * This file is part of the TYPO3 responsive images project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read
 * LICENSE file that was distributed with this source code.
 *
 */

use Arndtteunissen\ImproveProcessedFilename\Resource\Processing\ImageCropScaleMaskTask;
use TYPO3\CMS\Core\Resource\File;
use TYPO3\CMS\Core\Resource\ProcessedFile;

class TinifyCompressorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests if the new filename is generated correctly.
     *
     * @test
     */
    public function testGeneratedFileExtension()
    {
        $fileMock = $this->getMock(File::class, ['getNameWithoutExtension', 'getUid', 'getModificationTime', 'getExtension'], [], '', false);
        $fileMock->expects($this->once())->method('getNameWithoutExtension')->willReturn('My-test-file');
        $fileMock->expects($this->once())->method('getUid')->willReturn('1');
        $fileMock->expects($this->once())->method('getModificationTime')->willReturn('1521931104');
        $fileMock->expects($this->once())->method('getExtension')->willReturn('jpg');

        $processedFileMock = $this->getMock(ProcessedFile::class, ['getOriginalFile'], [], '', false);
        $processedFileMock->expects($this->once())->method('getOriginalFile')->willReturn($fileMock);

        $task = new ImageCropScaleMaskTask($processedFileMock, []);

        $this->assertEquals('My-test-file_4339f37d67.jpg', $task->getTargetFilename());
    }
}
