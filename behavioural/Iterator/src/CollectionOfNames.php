<?php

namespace src {

    class CollectionOfNames implements Container
    {
        private array $names = [
            "Ashwani Rajput", "Soono Jaiswal", "Rishi Kumar", "Rahul Mehta", "Hemant Mishra"
        ];

        public function getIterator(): Iterator
        {
            return new CollectionOfNamesIterate($this->names);
        }
    }

    class CollectionOfNamesIterate implements Iterator
    {
        private $index = 0;

        public function __construct(private $array)
        {
        }

        public function hasNext(): bool
        {
            return $this->index < count($this->array);
        }

        public function next(): mixed
        {
            if ($this->hasNext()) {
                return $this->array[$this->index++];
            } else {
                return null;
            }
        }
    }
}
