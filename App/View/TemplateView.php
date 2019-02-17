<?php
/*
Нужно создать класс App\View\TemplateView, и реализовать в нем отрисовку через шаблон.
Вывод должен быть построен на шаблонах из папки Views
Чтобы в контроллере можно было сделать вот так:
return new TemplateView('forms_view', ['title' => 'Title value', 'content' => 'Content value']);
*/
//TODO template inheritance
//render content
//then render layout (base) and include content
//print layout

namespace App\View;

class TemplateView implements ViewInterface

{
    private $view;
    private $data;

    public function __construct(string $view, array $data)
    {
        $this->view = __DIR__ . '/../../views/' . $view . '.php';

        if (!is_readable($this->view)) {
            throw new \Exception("$this->view not found");
        }

        $this->data = $data;
    }

    public function render()
    {
        ob_start();

        extract($this->data);
        require __DIR__ . '/../../views/layout.php';

        return ob_get_clean();
    }

}
