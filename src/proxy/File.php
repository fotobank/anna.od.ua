<?php
/**
 * Framework Component
 *
 * @created   by PhpStorm
 * @package   File.php
 * @version   1.0
 * @author    Alex Jurii <jurii@mail.ru>
 * @link      http://alex.od.ua
 * @copyright ��������� ����� (C) 2000-2015, Alex Jurii
 * @date:     05.09.2015
 * @time:     22:46
 * @license   MIT License: http://opensource.org/licenses/MIT
 */

namespace proxy;


use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;
use League\Flysystem\MountManager;


/**
 * Class File
 *
 * @package proxy
 *
 * Write Files
 * @method static write($path, $contents);
 * @see    File::write('path/to/file.txt', 'contents')
 *
 * Update Files
 * @method static update($path, $contents);
 * @see    File::update('path/to/file.txt', 'new contents')

 * Write or Update Files
 * @method static put($path, $contents);
 * @see    File::put('path/to/file.txt', 'contents')
 *
 * Read Files
 * @method static read($path);
 * @see    File::read('path/to/file.txt')
 *
 * Check if a file exists
 * @method static has($path);
 * @see    File::has('path/to/file.txt')
 *
 * Delete Files
 * @method static delete($path);
 * @see    File::delete('path/to/file.txt')
 *
 * Read and Delete
 * @method static readAndDelete($path);
 * @see    File::readAndDelete('path/to/file.txt')
 *
 * Rename Files
 * @method static rename($path, $newname);
 * @see    File::rename('filename.txt', 'newname.txt')
 *
 * Copy Files
 * @method static copy($path, $duplicate);
 * @see    File::copy('filename.txt', 'duplicate.txt')
 *
 * Get Mimetypes
 * @method static getMimetype($path);
 * @see    File::getMimetype('path/to/file.txt')
 *
 * Get Timestamps
 * @method static getTimestamp($path);
 * @see    File::getTimestamp('path/to/file.txt')
 *
 * Get File Sizes
 * @method static getSize($path);
 * @see    File::getSize('path/to/file.txt')
 *
 * Create Directories
 * @method static createDir($path);
 * @see    File::createDir('path/to/nested/directory')
 *
 * Delete Directories
 * @method  static deleteDir($path);
 * @see     File::deleteDir('/path/to/directory')
 *
 * @todo ftp adapter
 *
 */
class File extends AbstractProxy
{

    /**
     * Init instance
     *
     * @return \auth\Auth
     * @throws \Exception
     */
    protected static function initInstance()
    {
        try
        {
            $localAdapter = new Local(SITE_PATH);
            $local        = new Filesystem($localAdapter);

            $manager = new MountManager([
                                            'local' => $local
                                        ]);
            return $manager;
        }
        catch(\Exception $e)
        {
            throw $e;
        }
    }
}