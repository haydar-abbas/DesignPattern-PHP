<?php

namespace src;

interface IObservable {

    function addObserver(IObserver $observer);

    function removeObserver(IObserver $observer);

    function notifyAllObserver();

}
