<?php

declare(strict_types=1);

namespace Gregwar\RST;

class Metas
{
    protected $entries = [];
    protected $parents = [];

    public function __construct($entries)
    {
        if (! $entries) {
            return;
        }

        $this->entries = $entries;
    }

    public function getAll()
    {
        return $this->entries;
    }

    /**
     * Sets the meta for url, giving the title, the modification time and
     * the dependencies list
     */
    public function set($file, $url, $title, $titles, $tocs, $ctime, array $depends) : void
    {
        foreach ($tocs as $toc) {
            foreach ($toc as $child) {
                $this->parents[$child] = $file;
                if (! isset($this->entries[$child])) {
                    continue;
                }

                $this->entries[$child]['parent'] = $file;
            }
        }

        $this->entries[$file] = [
            'file' => $file,
            'url' => $url,
            'title' => $title,
            'titles' => $titles,
            'tocs' => $tocs,
            'ctime' => $ctime,
            'depends' => $depends,
        ];

        if (! isset($this->parents[$file])) {
            return;
        }

        $this->entries[$file]['parent'] = $this->parents[$file];
    }

    /**
     * Gets the meta for a given document reference url
     */
    public function get($url)
    {
        if (isset($this->entries[$url])) {
            return $this->entries[$url];
        }

        return null;
    }
}
