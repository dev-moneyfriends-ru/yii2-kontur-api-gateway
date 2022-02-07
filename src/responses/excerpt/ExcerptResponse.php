<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 04.02.2022
 * Time: 16:01
 */

namespace mfteam\kontur\responses\excerpt;

use mfteam\kontur\exceptions\KonturDownloadFileException;
use mfteam\kontur\responses\AbstractBaseObject;
use mfteam\kontur\responses\ResponseInterface;

/**
 * Выписка из ЕГРЮЛ/ЕГРИП
 *
 * Class ExcerptResponse
 * @package mfteam\kontur\responses\excerpt
 */
class ExcerptResponse extends AbstractBaseObject implements ResponseInterface
{
    /**
     * @var string|null
     */
    protected $content;

    /**
     * @var string|null
     */
    private $tempPath;

    /**
     * @return string|null
     * @throws KonturDownloadFileException
     */
    public function getTempPath(): ?string
    {
        if (
            $this->tempPath !== null &&
            file_exists($this->tempPath) === true
        ) {
            return $this->tempPath;
        }

        if ($this->content === null) {
            return null;
        }

        $content = $this->content;
        $tempPath = tempnam(sys_get_temp_dir(), 'PDF');

        if (file_put_contents($tempPath, $content) === false) {
            throw new KonturDownloadFileException('Temp file can not to be saved.');
        }

        $this->tempPath = $tempPath;

        return $this->tempPath;
    }
}
