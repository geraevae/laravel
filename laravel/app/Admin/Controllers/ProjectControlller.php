<?php

namespace App\Admin\Controllers;

use App\Models\Project;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProjectControlller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Project';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Project());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('image', __('Image'));
        $grid->column('preview', __('Preview'));
        $grid->column('content', __('Content'));
        $grid->column('is_active', __('Is active'));
        $grid->column('published_at', __('Published at'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Project::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('image', __('Image'));
        $show->field('preview', __('Preview'));
        $show->field('content', __('Content'));
        $show->field('is_active', __('Is active'));
        $show->field('published_at', __('Published at'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Project());

        $form->text('title', __('Title'));
        $form->image('image', __('Image'));
        $form->textarea('preview', __('Preview'));
        $form->textarea('content', __('Content'));
        $form->switch('is_active', __('Is active'));
        $form->datetime('published_at', __('Published at'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
