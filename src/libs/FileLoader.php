<?php
/**
 * Created by PhpStorm.
 * User: trevorhebert
 * Date: 13-12-07
 * Time: 9:18 PM
 *
 * This handles the loading of files
 */

class FileLoader {
    protected $controllerBasePath = 'controllers/';
    protected $libraryBasePath = 'libs/';
    protected $configBasePath = 'config/';
    protected $suffix = '.php';

    /**
     * This function is only called if the file exists and it loads the controller file
     * @param $fileName - The file name to be loaded
     */
    function loadControllerFile($fileName){
        $controllerPath = $this->controllerBasePath . $fileName . $this->suffix;
        if(file_exists($controllerPath)){
            require $controllerPath;
        }

    }

    /**
     * This function checks if the config, controller or library file exists
     * @param $fileName - Name of file without extension
     * @param $fileType - Type of file
     * @return boolean - Whether file exists or not
     */
    function checkFileExists($fileName, $fileType){
        switch($fileType)
        {
            case "library":
                if(file_exists($this->libraryBasePath . $fileName . $this->suffix)){
                    return true;
                }
                else
                {
                    return false;
                }
            case "config":
                if(file_exists($this->configBasePath . $fileName . $this->suffix)){
                    return true;
                }
                else
                {
                    return false;
                }
            case "controller":
                if(file_exists($this->controllerBasePath . $fileName . $this->suffix)){
                    return true;
                }
                else
                {
                    return false;
                }
            default:
                echo 'that filetype is fucked';
        }
    }

    /**
     * This function loads in the library files. If the file doesn't exist a warning is diplayed
     * @param array $fileNames - array of file names to be loaded
     */
    function loadLibraryFiles(array $fileNames){
        foreach($fileNames as $fileName){
            $libraryPath = $this->libraryBasePath . $fileName . $this->suffix;
            if($this->checkFileExists($fileName, 'library')){
                require $libraryPath;
            }
            else
            {
                echo '<pre><strong>Warning: </strong>The <strong>Library</strong> file ' . $fileName . $this->suffix . ' does not exist and was not loaded in ' . URL .$this->libraryBasePath . '</pre>';
            }
        }


    }

    /**
     * This function loads in the config files. If the file doesn't exist a warning is displayed
     * @param array $fileNames - array of file names
     */
    function loadConfigFiles(array $fileNames){
        foreach($fileNames as $fileName){
            $configPath = $this->configBasePath . $fileName . $this->suffix;
            if(file_exists($configPath)){
                require $configPath;
            }
            else
            {
                echo '<pre><strong>Warning: </strong>The <strong>Config</strong> file ' . $fileName . $this->suffix . ' does not exist and was not loaded in ' . URL .$this->configBasePath . '</pre>';
            }
        }

    }
}