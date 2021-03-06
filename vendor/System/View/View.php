<?php

namespace System\View;

use System\File;

class View implements ViewInterface
{

    /**
     * File object
     *
     * @var \System\File
     */
    private $file;

    /**
     * View path
     *
     * @var string
     */
    private $viewPath;

    /**
     * Passed data "variables" to the view path
     *
     * @var array
     */
    private $data = [];

    /**
     * The output from the view file
     *
     * @var string
     */
    private $output;

    /**
     * Constructor
     *
     * @param File $file
     * @param string $viewPath
     * @param array $data
     */
    public function __construct(File $file, $viewPath, array $data = [])
    {
        $this->file = $file;
        $this->preparePath($viewPath);
        $this->data = $data;
    }

    /**
     * Prepare view path
     *
     * @param string $viewPath
     * @return void
     */
    private function preparePath($viewPath)
    {
        $relative_path  = 'app/Views/' . $viewPath . '.php';
        $this->viewPath = $this->file->to($relative_path);
        if (!$this->viewFileExists($relative_path)) {
            die('<b>' . $viewPath . '</b>' . ' doesn\'t exist in Views');
        }
    }

    /**
     * Determine if the view file exists
     *
     * @param string $viewPath
     * @return bool
     */
    private function viewFileExists($viewPath)
    {
        return $this->file->exists($viewPath);
    }

    /**
     * {@inheritDoc}
     *
     * Get the view output
     *
     * @return string
     */
    public function getOutput()
    {
        if (is_null($this->output)) {
            ob_start();
            extract($this->data);
            require $this->viewPath;
            $this->output = ob_get_clean();
        }
        return $this->output;
    }

    /**
     * {@inheritDoc}
     *
     * Convert the view object to string in printing
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getOutput();
    }

}
