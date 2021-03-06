<?php namespace StudioAzura\Localize\Widgets;

use StudioAzura\Localize\Classes\LocalizationModel;

class LanguageList extends \RainLab\Builder\Widgets\LanguageList
{
    public function __construct($controller, $alias)
    {
        parent::__construct($controller, $alias);

        $this->viewPath = [
            $this->viewPath,
            '$/rainlab/builder/widgets/languagelist/partials',
        ];


        $this->addJs( url('plugins/studioazura/localize/assets/js/select-file.js') );
    }

    protected function getLanguageList($pluginCode)
    {
        $result = LocalizationModel::listPluginLanguages($pluginCode);

        return $result;
    }
}
