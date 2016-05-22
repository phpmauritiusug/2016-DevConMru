<?php

/**
 * A web Page Model for our personal website.
 */
class PageModel
{
    /**
     * The web page title.
     *
     * @var null
     */
    public $title = null;

    /**
     * The page layout, with a default value.
     *
     * @var string
     */
    public $layout = 'layout.php';

    /**
     * Rendering the web page.
     */
    public function render()
    {
        if (method_exists($this, 'prerender')) {
            $this->prerender();
        }

        require '../'.$this->layout;
    }

    /**
     * Use this method in layouts to grab the content from the intended view.
     *
     * @return string
     */
    public function getMainContent()
    {
        return require '/var/www/Pages/Views/'.get_class($this).'.php';
    }
}
