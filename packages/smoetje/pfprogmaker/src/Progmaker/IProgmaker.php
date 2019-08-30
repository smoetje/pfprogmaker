<?php

namespace Smoetje\Pfprogmaker;


use Smoetje\Pfprogmaker\Progmaker\ProgImport\IProgImport;

interface IProgmaker
{
    public function getGoogleSheet() : IProgImport;
    public function getExcel() : IProgImport;
}
