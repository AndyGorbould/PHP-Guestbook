<?php

class Post {

    // PROPERTIES
    private string $name;
    private string $title;
    private string $message;
    private string $time;

    // CONSTRUCT
    public function __construct(string $name, string $title, string $message, string $time)
	{
		$this->name = $name;
		$this->title = $title;
        $this->message = $message;
        $this->time = $time;
	}

    // GETTERS:     getName()   getTitle()  getMessage()    getTime()
    ////////////////////////////
    public function getName(): string {
        return $this->name;
    }
    public function getTitle(): string {
        return $this->title;
    }
    public function getMessage(): string {
        return $this->message;
    }
    public function getTime(): string {
        return $this->time;
    }
    // SETTERS:     setName()   setTitlt()  setMessage()    setTime()
    ////////////////////////////
    public function setName(string $name) {
        $this->name = $name;
    }
    public function setTitle(string $title) {
        $this->title = $title;
    }
    public function setMessage(string $message) {
        $this->message = $message;
    }
    public function setTime(string $time) {
        $this->time = $time;
    }
    }
