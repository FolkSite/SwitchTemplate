<?php
/**
 * SwitchTemplate
 *
 * Copyright 2014 by Thomas Jakobi <thomas.jakobi@partout.info>
 *
 * @package switchtemplate
 * @subpackage processor
 *
 * Update processor for SwitchTemplate CMP
 */
class SwitchTemplateSettingUpdateProcessor extends modObjectUpdateProcessor
{
    public $classKey = 'SwitchtemplateSettings';
    public $languageTopics = array('switchtemplate:default');
    public $objectType = 'switchtemplate.settings';

    public function beforeSave()
    {
        $cache = ($this->getProperty('cache')) == 'true' || $this->getProperty('cache') == '1' ? 1 : 0;
        $this->object->set('cache', $cache);
        $include = $this->getProperty('includeData');
        $this->object->set('include', $include);
        $exclude = $this->getProperty('excludeData');
        $this->object->set('exclude', $exclude);
        return parent::beforeSave();
    }
}

return 'SwitchTemplateSettingUpdateProcessor';