<?php

namespace Morce\Template\Factory;

use Morce\Application\ConfigLoader;
use Morce\Template\Facades\TemplateFacade;

/**
 * Work with current Template engine
 */
class TemplateEngineFactory
{
    /**
     * Get  current template engine
     *
     * @return TemplateFacade
     */
    public static function getTemplateEngine(): TemplateFacade
    {
        $config = ConfigLoader::getConfig(ConfigLoader::CONFIG_FILE_TEMPLATE_ENGINE);
        $currentTemplateEngine = $config['current'];
        return new $config['available'][$currentTemplateEngine];
    }
}