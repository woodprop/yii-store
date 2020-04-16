<?php


namespace app\components;


use app\models\Category;
use yii\base\Widget;

class MenuWidget extends Widget
{
    public $tpl;
    public $ul_class;
    public $data;
    public $tree;
    public $menuHtml;
    public $model;
    public $cache_time = 60;

    public function init()
    {
        parent::init();

        if (!$this->tpl){
            $this->tpl = 'menu';
        }
        $this->tpl .= '.php';

        if (!$this->ul_class){
            $this->ul_class = 'menu';
        }
    }

    public function run()
    {
        // ---------- Get cache ----------
        if ($this->cache_time){
            $menu = \Yii::$app->cache->get('menu');
            if ($menu) return $menu;
        }


        $this->data = Category::find()->select('id, parent_id, title')->indexBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        $this->menuHtml = '<ul class="' . $this->ul_class . '">';
        $this->menuHtml .= $this->getMenuHtml($this->tree);
        $this->menuHtml .= '</ul>';

        // ---------- Set cache ----------
        if ($this->cache_time){
            \Yii::$app->cache->set('menu', $this->menuHtml, 60);
        }
        return $this->menuHtml;
    }

    protected function getTree()
    {
        $tree = [];
        foreach ($this->data as $id => &$node) {
            if (!$node['parent_id']) $tree[$id] = &$node;
            else $this->data[$node['parent_id']]['children'][$node['id']] = &$node;
        }
        return $tree;
    }

    protected function getMenuHtml($tree, $tab = '')
    {
        $str = '';
        foreach ($tree as $category){
            $str .= $this->catToTemplate($category, $tab);
        }
        return $str;
    }

    protected function catToTemplate($category, $tab){
        ob_start();
        include __DIR__ . '/menu_tpl/' . $this->tpl;
        return ob_get_clean();
    }
}