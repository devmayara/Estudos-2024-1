<?php

namespace Source\Core;

use League\Plates\Engine;

/**
 * Class View
 * @package Source\Core
 */
class View
{
    /** @var Engine */
    private $engine;

    /**
     * View constructor.
     * @param string $path
     * @param string $ext
     */
    public function __construct(string $path = CONF_VIEW_PATH, string $ext = CONF_VIEW_EXT)
    {
        $this->engine = new Engine($path, $ext);
    }

    /**
     * @param string $name
     * @param string $path
     * @return $this
     */
    public function path(string $name, string $path): View
    {
        $this->engine->addFolder($name, $path);
        return $this;
    }

    /**
     * @param string $name
     * @param array $data
     * @return string
     */
    public function render(string $name, array $data): string
    {
        return $this->engine->render($name, $data);
    }

    /**
     * @return Engine
     */
    public function engine(): Engine
    {
        return $this->engine;
    }
}