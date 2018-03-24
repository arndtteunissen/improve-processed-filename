<?php
defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SYS']['fal']['processingTaskTypes']['Image.CropScaleMask'] = \Arndtteunissen\ImproveProcessedFilename\Resource\Processing\ImageCropScaleMaskTask::class;
