<?php

use Message as GlobalMessage;

class Message {

    // PROPERTIES
    private $name;
    private $title;
    private $message;
    private $time;

    // CONSTRUCT
    public function __construct($name, $title, $message, $time)
	{
		$this->name = $name;
		$this->title = $title;
        $this->message = $message;
        $this->time = $time;
	}

    // GETTERS:     getName()   getTitle()  getMessage()    getTime()
    ////////////////////////////
    public function getName() {
        return $this->name;
    }
    public function getTitle() {
        return $this->title;
    }
    public function getMessage() {
        return $this->message;
    }
    public function getTime() {
        return $this->time;
    }
    // SETTERS:     setName()   setTitlt()  setMessage()    setTime()
    ////////////////////////////
    public function setName($name) {
        $this->name = $name;
    }
    public function setTitle($title) {
        $this->title = $title;
    }
    public function setMessage($message) {
        $this->message = $message;
    }
    public function setTime($time) {
        $this->time = $time;
    }
        // Serialize, Unserialize, Connect
    ////////////////////////////
    private function connect()
    {
        $this->link = new Message($this->name, $this->title, $this->message, $this->time);
    }
    public function __serialize(): array
    {
        return [
          'name' => $this->name,
          'title' => $this->title,
          'message' => $this->message,
          'time' => $this->time,
        ];
    }
    public function __unserialize(array $data): void
    {
        $this->name = $data['name'];
        $this->title = $data['title'];
        $this->message = $data['message'];
        $this->time = $data['time'];

        $this->connect();
    }
}

?>