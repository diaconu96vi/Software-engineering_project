<?php

class BuildPhar
{
  private $_sourceDirectory = /testare/src;
  private $_stubFile        = /testare/src;
  private $_outputDirectory = /testare/output;
  private $_pharFileName    = /testare;

  /**
   * @param $_sourceDirectory       // This is the directory where your project is stored.
   * @param $stubFile               // Name the entry point for your phar file. This file have to be within the source
   *                                   directory. 
   * @param null $_outputDirectory  // Directory where the phar file will be placed.
   * @param string $pharFileName    // Name of your final *.phar file.
   */
  public function __construct($_sourceDirectory, $stubFile, $_outputDirectory = null, $pharFileName = 'myPhar.phar') {

    if ((file_exists($_sourceDirectory) === false) || (is_dir($_sourceDirectory) === false)) {
      throw new Exception('No valid source directory given.');
    }
    $this->_sourceDirectory = $_sourceDirectory;

    if (file_exists($this->_sourceDirectory.'/'.$stubFile) === false) {
      throw new Exception('Your given stub file doesn\'t exists.');
    }

    $this->_stubFile = $stubFile;

    if(empty($pharFileName) === true) {
      throw new Exception('Your given output name for your phar-file is empty.');
    }
    $this->_pharFileName = $pharFileName;

    if ((empty($_outputDirectory) === true) || (file_exists($_outputDirectory) === false) || (is_dir($_outputDirectory) === false)) {

      if ($_outputDirectory !== null) {
        trigger_error ( 'Your output directory is invalid. We set the fallback to: "'.dirname(__FILE__).'".', E_USER_WARNING);
      }

      $this->_outputDirectory = dirname(__FILE__);
    } else {
      $this->_outputDirectory = $_outputDirectory;
    }

    $this->prepareBuildDirectory();
    $this->buildPhar();
  }

  private function prepareBuildDirectory() {
    if (preg_match('/.phar$/', $this->_pharFileName) == FALSE) {
      $this->_pharFileName .= '.phar';
    }

    if (file_exists($this->_pharFileName) === true) {
      unlink($this->_pharFileName);
    }
  }

  private function buildPhar() {
    $phar = new Phar($this->_outputDirectory.'/'.$this->_pharFileName);
    $phar->buildFromDirectory($this->_sourceDirectory);
    $phar->setDefaultStub($this->_stubFile);
  }
}