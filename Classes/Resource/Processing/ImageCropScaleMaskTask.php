<?php
namespace Arndtteunissen\ImproveProcessedFilename\Resource\Processing;

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

use TYPO3\CMS\Core\Resource\Processing\AbstractGraphicalTask;

/**
 * Class ImageCropScaleMaskTask
 */
class ImageCropScaleMaskTask extends AbstractGraphicalTask
{
    /**
     * @var string
     */
    protected $type = 'Image';
    /**
     * @var string
     */
    protected $name = 'CropScaleMask';

    /**
     * Checks if the given configuration is sensible for this task, i.e. if all required parameters
     * are given, within the boundaries and don't conflict with each other.
     *
     * @param array $configuration
     * @return bool
     */
    protected function isValidConfiguration(array $configuration)
    {
        // @todo Implement isValidConfiguration() method.
        return true;
    }

    public function fileNeedsProcessing()
    {
        // @todo Implement fileNeedsProcessing() method.
    }
}
