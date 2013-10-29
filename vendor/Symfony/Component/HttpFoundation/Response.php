<?php

namespace Symfony\Component\HttpFoundation;

class Response {

    /**
     * Response Content
     *
     * @var string
     **/
    private $content;

    /**
     * Set Response Content
     *
     * @return void
     * @param string $content
     **/
    public function setContent($content){
        $this->content = $content;
    }

    /**
     * Get Response Content
     *
     * @return void
     **/
    public function getContent(){
        return $this->content;
    }
}