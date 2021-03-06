<?php
/**
 * @package    EasyCreator
 * @subpackage AutoCodes
 * @author     Nikolai Plath (elkuku)
 * @author     Created on 07-Mar-2010
 */

//-- No direct access
defined('_JEXEC') || die('=;)');

/**
 * Enter description here ...@todo class doccomment.
 *
 */
class AutoCodeAdminSqlInsert extends EasyAutoCode
{
    protected $tags = array('start' => '#', 'end' => '#');

    protected $enclose = false;

    private $indent = '  ';

    /**
     * Get the AutoCode to insert.
     *
     * @param string $type AutoCode type
     * @param EasyTable $table A EasyTable object
     *
     * @return string
     */
    public function getCode($type, EasyTable $table)
    {
        $element = $this->getElement($type, dirname(__FILE__));

        if( ! $element)
        {
            return false;
        }

        return $element->getCode($table, $this->indent);
    }//function
}//class
