<?php

namespace App\Service\Layouts;


class MenuImpl implements Menu
{
    protected $menu = array();
    protected $type = 'AdminMenu';
    public $html = '';

    function __construct(){ }

    public static function instance(){

        $menu = new MenuImpl();
        return $menu;
    }

    public function compose($view){
        $menu = static::instance();

        $menu->create($this->type);
        $this->html = $menu->getMenu($this->type);

        $view->with('menu', $this);
    }

    public function create($name){
        $this->menu[$name] = $this->getMenuItems($name);
    }

    public function getMenu($name){
        return $this->menu[$name];
    }

    protected function getMenuItems($type){
        $html = '';
        $function = "get$type";

        if(method_exists($this,$function)){
            foreach( $this->$function() as $key => $item){
                $iconHtml = array_key_exists('font-awseome', $item) && $item['font-awseome'] == 1?
                    '<i class="fa fa-'.$item['icon'].'" aria-hidden="true"></i>':
                    '<i class="material-icons">'.$item['icon'].'</i>';

                $html .= '<li class="nav-item '.($key == 0 ? 'active': '').'">
                        <a class="nav-link" href="'.$item['href'].'">
                            '.$iconHtml.'

                            <p>'.$item['text'].'</p>
                        </a>
                    </li>';
            }
        }

        return $html;

    }

    protected function getAdminMenu(){

        return [
            [
                'icon' => 'dashboard',
                'text' => 'Dashboard',
                'href' => 'admin',
            ],
            [
                'font-awseome' => 1,
                'icon' => 'money',
                'text' => 'Day Account',
                'href' => 'day-account',
            ],

            // [
            //     'icon' => 'content_paste',
            //     'text' => 'Table List',
            //     'href' => '#',
            // ],

            // [
            //     'icon' => 'library_books',
            //     'text' => 'Typography',
            //     'href' => '#',
            // ],

            // [
            //     'icon' => 'bubble_chart',
            //     'text' => 'Icons',
            //     'href' => '#',
            // ],
        ];

    }
}
