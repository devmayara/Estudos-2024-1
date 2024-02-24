<?php

namespace Source\App;

use Source\Core\Controller;

/**
 * Web Controller
 * @package Source\App
 */
class Web extends Controller
{
    /**
     * Web constructor.
     */
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
    }

    /**
     * SITE HOME
     * @return void
     */
    public function home(): void
    {
        echo "<p>Home</p>";
    }

    /**
     * SITE NAV ERROR
     * @param array $data
     * @return void
     */
    public function error(array $data): void
    {
        echo "<p>Error</p>";
        var_dump($data);
    }
}