<?php

namespace core;
class View
{
//    模板文件
    protected $file;
//    变量文件
    protected $vars = [];

    public function make($file)
    {
//        echo 'make';
        $this->file = 'view/' . $file . '.html';
        return $this;
    }

    public function with($name, $value)
    {
        $this->vars[$name] = $value;
        return $this;
    }

    public function __toString()
    {
        extract($this->vars);
        include $this->file;
        return '';
    }
}