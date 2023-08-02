<?php

namespace src;

class Course implements IObservable
{
    private string $name;
    private string $status;
    private $observers;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->observers  = new \ArrayObject();
    }

    public function addObserver(IObserver $observer)
    {
        $this->observers->append($observer);
    }

    public function removeObserver(IObserver $observer)
    {
        for ($i = 0; $i < count($this->observers); $i++) {
            if ($this->observers->offsetGet($i) === $observer) {
                $this->observers->offsetUnset($i);
                break;
            }
        }
    }

    public function notifyAllObserver()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->status);
        }
    }

    public function setAvailability(bool $avilable)
    {
        $this->status = $this->name . ($avilable ? " is available" : " not available");
        $this->notifyAllObserver();
    }
}
