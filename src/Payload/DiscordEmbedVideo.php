<?php

namespace Chewett\PHPDiscordWebhookMessenger\Payload;



class DiscordEmbedVideo implements \JsonSerializable  {

    /** @var string source url of video */
    private $url;
    /** @var int height of video */
    private $height;
    /** @var int width of video */
    private $width;

    /** @override */
    public function jsonSerialize() {
        $returnedData = [];

        if($this->url) {
            $returnedData["url"] = $this->url;
        }
        if($this->height) {
            $returnedData["height"] = $this->height;
        }
        if($this->width) {
            $returnedData["width"] = $this->width;
        }

        return $returnedData;
    }

}


