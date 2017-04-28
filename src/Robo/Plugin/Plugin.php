<?php

namespace RoboPluginExample\Robo\Plugin;

use Robo\PluginInterface;
use Composer\IO\IOInterface;

class Plugin implements PluginInterface {

    /**
     * {inheritdoc}
     */
    public static function install(IOInterface $io, array $extra) {
        $io->write('Hello world!');
    }
}
