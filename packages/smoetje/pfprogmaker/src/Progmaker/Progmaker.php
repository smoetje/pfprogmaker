<?php


namespace Smoetje\Pfprogmaker\Progmaker;

use Smoetje\Pfprogmaker\IProgmaker;
use Smoetje\Pfprogmaker\Progmaker\ProgImport\ImportExcel;
use Smoetje\Pfprogmaker\Progmaker\ProgImport\ImportGoogleSheet;
use Smoetje\Pfprogmaker\Progmaker\ProgImport\IProgImport;

class Progmaker implements IProgmaker
{
    public function new()
    {
        print("Creating new prog!");
    }

    public function getGoogleSheet() : IProgImport
    {
        return new ImportGoogleSheet();
    }

    public function getExcel() : IProgImport
    {
        return new ImportExcel();
    }
}

