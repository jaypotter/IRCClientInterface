<?php

declare(strict_types=1);

namespace Potter\Resource\IRC;

use \Psr\{EventDispatcher\EventDispatcherInterface, Link\LinkInterface};

interface IRCClientInterface
{
    public function getEventDispatcher(): EventDispatcherInterface;
    public function getLink(): LinkInterface;
    
    public function getPassword(): string;
    public function sendPassword(): void;
    
    public function getNickname(): string;
    public function sendNickname(): void;
    
    public function getUsername(): string;
    public function getRealName(): string;
    public function getHostname(): string;
    public function getServerName(): string;
    public function sendUsername(): void;
        
    public function handleConnection(): void;
    
    public function getLastIRCMessage(): string;
    public function handleMessage(): void;
    
    public function getLastServerMessageNumber(): int;
    public function handleServerMessage(): void;
    
    public function getMessageOfTheDay(): string;
    public function handleMessageOfTheDay(): void;
    
    public function pong(string $token): void;
    public function handlePing(): void;

    public function getLastPrivateMessageSender(): string;
    public function handlePrivateMessage(): void;
}