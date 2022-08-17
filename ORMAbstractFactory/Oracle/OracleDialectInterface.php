<?php

interface OracleDialectInterface extends DialectsInterface
{
    public string $DSN;
    public string $USER;
    public string $PASSWORD;
    public array $OPTIONS;
}