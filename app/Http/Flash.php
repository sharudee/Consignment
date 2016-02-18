<?php

namespace App\Http;

/**
 * Class Flash
 * @package App\Http
 */
class Flash
{
    /**
     * @param $title
     * @param $message
     * @param $level
     */
    public function create($title, $message, $level, $key = 'flash_message')
    {
        session()->flash($key, [
            'title'   => $title,
            'message' => $message,
            'level'   => $level,
        ]);
    }

    /**
     * Info
     * @param $title
     * @param $message
     */
    public function info($title, $message)
    {
        return $this->create($title, $message, 'info');
    }

    /**
     * Success
     * @param $title
     * @param $message
     */
    public function success($title, $message)
    {
        return $this->create($title, $message, 'success');
    }

    /**
     * Error
     * @param $title
     * @param $message
     */
    public function error($title, $message)
    {
        return $this->create($title, $message, 'error');
    }

    /**
     * Overlay
     * @param $title
     * @param $message
     */
    public function overlay($title, $message, $level = 'success')
    {
        return $this->create($title, $message, $level, 'flash_message_overlay');
    }

}
