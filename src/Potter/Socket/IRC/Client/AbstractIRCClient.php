<?php

declare(strict_types=1);

namespace Potter\Socket\IRC\Client;

use \Psr\Link\LinkInterface;

abstract class AbstractIRCClient implements IRCClientInterface
{
    abstract public function getLink(): LinkInterface;
    
    abstract public function getPassword(): string;
    abstract public function sendPassword(): void;
    
    abstract public function getNickname(): string;
    abstract public function sendNickname(): void;
    
    abstract public function getUsername(): string;
    abstract public function getRealName(): string;
    abstract public function getHostname(): string;
    abstract public function getServerName(): string;
    abstract public function sendUsername(): void;
}