<?php

namespace Source\Core;

/**
 * Class Session
 * @package Source\Core
 */
class SessionOne
{
    /**
     * Session constructor.
     */
    public function __construct()
    {
        if (!session_id()) {
            session_save_path(CONF_SES_PATH);
            session_start();
        }
    }

    /**
     * @param $name
     * @return mixed|null
     */
    public function __get($name)
    {
        if (!empty($_SESSION[$name])) {
            return $_SESSION[$name];
        }
        return null;
    }

    /**
     * @param string $name
     * @return bool
     */
    public function __isset(string $name): bool
    {
        return $this->has($name);
    }

    /**
     * @return object|null
     */
    public function all(): ?object
    {
        return (object)$_SESSION;
    }

    /**
     * @param string $key
     * @param mixed|$value
     * @return SessionOne
     */
    public function set(string $key, $value): SessionOne
    {
        $_SESSION[$key] = (is_array($value) ? (object)$value : $value);
        return $this;
    }

    /**
     * @param string $key
     * @return SessionOne
     */
    public function unset(string $key): SessionOne
    {
        unset($_SESSION[$key]);
        return $this;
    }

    /**
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool
    {
        return isset($_SESSION[$key]);
    }

    /**
     * @return SessionOne
     */
    public function regenerate(): SessionOne
    {
        session_regenerate_id(true);
        return $this;
    }

    /**
     * @return SessionOne
     */
    public function destroy(): SessionOne
    {
        session_destroy();
        return $this;
    }

    /**
     * @return MessageOne|null
     */
    public function flash(): ?MessageOne
    {
        if ($this->has("flash")) {
            $flash = $this->flash;
            $this->unset("flash");
            return $flash;
        }
        return null;
    }

    /**
     * CSRF Token
     */
    public function csrf(): void
    {
        $_SESSION['csrf_token'] = base64_encode(random_bytes(20));
    }
}