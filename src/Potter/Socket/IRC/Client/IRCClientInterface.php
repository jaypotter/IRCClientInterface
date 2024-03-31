<?php

declare(strict_types=1);

namespace Potter\Socket\IRC\Client;

use \Psr\Link\LinkInterface;

interface IRCClientInterface
{
    public function getLink(): LinkInterface;
    
    public function getPass(): string;
    public function sendPass(): void;
    
    public function getNick(): string;
    public function sendNick(): void;
    
    public function getUser(): string;
    public function getRealName(): string;
    public function getHostName(): string;
    public function getServer(): string;
    public function sendUser(): void;
}