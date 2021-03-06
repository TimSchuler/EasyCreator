<?php
/**
 * @package		EasyCreator
 * @subpackage	Templates
 * @author		Nikolai Plath (elkuku)
 * @author		Created on 09-May-2009
 */

//-- No direct access
defined('_JEXEC') || die('=;)');

/**
 * Custom options for EasyCreator extension templates.
 *
 * @package EasyCreator
 */
class EasyTemplateOptions
{
    /**
     * Displays available options with nput fields.
     *
     * @return string HTML
     */
    public function displayOptions()
    {
        $html = jgettext('Folder name').' : <input type="text" name="ecr_folder_name" id="ecr_folder_name" />';

        return $html;
    }//function

    /**
     * Get the required fields.
     *
     * @return array Required fields.
     */
    public function getRequireds()
    {
        $requireds = array('ecr_folder_name');

        return $requireds;
    }//function

    /**
     * Process custom options.
     *
     * @param EasyBuilder $easyBuilder The EasyBuilder
     *
     * @return boolean True on sucess.
     */
    public function processOptions(EasyBuilder $easyBuilder)
    {
        if( ! $ecr_folder_name = JRequest::getCmd('ecr_folder_name'))
        {
	        JFactory::getApplication()->enqueueMessage(jgettext('No folder given'), 'error');

            return false;
        }

        $easyBuilder->setScope($ecr_folder_name);
        $easyBuilder->addSubstitute('_ECR_COM_SCOPE_', ucfirst($ecr_folder_name));

        return true;
    }//function
}//class
