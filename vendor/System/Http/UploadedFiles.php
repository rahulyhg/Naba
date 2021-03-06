<?php

namespace System\Http;

class UploadedFiles
{

    /**
     * The uploaded file
     *
     * @var array
     */
    private $file = [];

    /**
     * The uploaded file name (with extension)
     *
     * @var string;
     */
    private $fileName;

    /**
     * The uploaded file name (without extension)
     *
     * @var string;
     */
    private $name;

    /**
     * The uploaded file extension
     *
     * @var string;
     */
    private $extension;

    /**
     * The uploaded file mime type
     *
     * @var string;
     */
    private $mime;

    /**
     * The uploaded temporarily file path
     *
     * @var string;
     */
    private $tmp;

    /**
     * The uploaded file size (in bytes)
     *
     * @var int;
     */
    private $size;

    /**
     * Allowed Image Extensions
     *
     * @var array
     */
    private $allowedImageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

    /**
     * The uploaded file error
     *
     * @var int;
     */
    private $error;

    /**
     * Constructor
     *
     * @param string $input
     */
    public function __construct($input)
    {
        $this->getFileInfo($input);
    }

    /**
     * Collecting information from the uploaded file
     *
     * @param string $input
     * @return void
     */
    private function getFileInfo($input)
    {
        if (empty($_FILES[$input])) {
            return;
        }
        $file        = $_FILES[$input];
        $this->error = $file['error'];
        if ($this->error != UPLOAD_ERR_OK) {
            return;
        }
        $this->file      = $file;
        $this->fileName  = $this->file['name'];
        $fileinfo        = pathinfo($this->fileName);
        $this->name      = $fileinfo['filename'];
        $this->extension = strtolower($fileinfo['extension']);
        $this->mime      = $this->file['type'];
        $this->tmp       = $this->file['tmp_name'];
        $this->size      = $this->file['size'];
    }

    /**
     * Determine if the file have been uploaded
     *
     * @return bool
     */
    public function exists()
    {
        return !empty($this->file);
    }

    /**
     * Get file name (with extension)
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Get file name without extension
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get file extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Get file mime type
     *
     * @return string
     */
    public function getMime()
    {
        return $this->mime;
    }

    /**
     * Get file size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Determine whether the file is bigger than the given value
     *
     * @param int $max_size Maximum value that the file should be smaller than (in MB)
     *
     * @return bool Returns true if the uploaded file is bigger than the given value
     */
    public function maxSize($max_size)
    {
        return $this->size >= ($max_size * 1024 * 1024);
    }

    /**
     * Determine whether the uploaded file is image or not
     *
     * @return bool
     */
    public function isImg()
    {
        return strpos($this->mime, 'image/') === 0 &&
                in_array($this->extension, $this->allowedImageExtensions);
    }

    /**
     * Move the uploaded file to the given target
     *
     * @param string $target
     * @param string $newFileName
     * @return string
     */
    public function move($target, $newFileName = null)
    {
        if ($newFileName) {
            $fileName = $newFileName . '.' . $this->extension;
        } else {
            $fileName = sha1(time() + rand(1, 99)) . '.' . $this->extension;
        }
        if (!is_dir($target)) {
            return;
        }
        $filePath = rtrim($target, '/') . '/' . $fileName;
        move_uploaded_file($this->tmp, $filePath);
        return $fileName;
    }

}
