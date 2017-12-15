<?php

namespace Neox\Lumen\Messenger\Templates\Payload\Elements;

use Neox\Lumen\Messenger\Templates\Payload\Traits\HasButtons;
use Neox\Lumen\Messenger\Templates\Payload\Traits\HasUrl;

/**
 * Class OpenGraphElement
 * @package Neox\Jarvis\Messenger\Templates\Elements
 */
class OpenGraphElement implements ElementInterface
{
    use HasUrl;
    use HasButtons;

    /**
     * @return array
     */
    public function toArray()
    {
        $data = [
            "url" => $this->getUrl(),
        ];

        if (!empty($this->getButtons())) {
            $data['buttons'] = $this->getButtonsAsArray();
        }

        return $data;
    }
}