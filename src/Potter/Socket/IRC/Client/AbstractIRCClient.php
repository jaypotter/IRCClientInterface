<?php

declare(strict_types=1);

namespace Potter\Socket\IRC\Client;

use \Psr\Link\LinkInterface;

abstract class AbstractIRCClient implements IRCClientInterface
{
    abstract public function getLink(): LinkInterface;
    
    abstract public function getPass(): string;
    abstract public function sendPass(): void;
    
    abstract public function getNick(): string;
    abstract public function sendNick(): void;
    
    abstract public function getUser(): string;
    abstract public function getRealName(): string;
    abstract public function getHostName(): string;
    abstract public function getServer(): string;
    abstract public function sendUser(): void;
}