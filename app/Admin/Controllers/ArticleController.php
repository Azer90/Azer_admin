<?php

namespace App\Admin\Controllers;

use App\Article;
use App\Classify;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class ArticleController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header(trans('admin.article'))
            ->description(trans('admin.list'))
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header(trans('admin.article'))
            ->description(trans('admin.create'))
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Article);

        $grid->id('ID')->sortable();
        $grid->column('classify.name', '分类名');
        $grid->column('title', trans('admin.title'));
        $grid->column('keywords', trans('admin.keywords'))->style('max-width:200px;word-break:break-all;');
        $grid->description(trans('admin.description'))->style('max-width:200px;word-break:break-all;');
        $grid->hits(trans('admin.hits'))->style('max-width:200px;word-break:break-all;');
        $grid->show(trans('admin.show'))->display(function ($released) {
            return $released ? '是' : '否';
        });
        $grid->created_at(trans('admin.created_at'));
        $grid->updated_at(trans('admin.updated_at'));
        $grid->disableExport();

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
        $show = new Show(Article::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Article);
        $class=Classify::select('id','name')->get()->toArray();
        $class=array_column($class,'name','id');
        $form->display('id', 'ID');

        $form->text('title', trans('admin.title'))->rules('required');
        $form->text('keywords', trans('admin.keywords'))->placeholder('多关键词之间用英文逗号隔开')->rules('required');
        $form->text('description', trans('admin.description'))->placeholder('填写文章内容描述')->rules('required|max:120');

        $form->UEditor('content',trans('admin.content'))->rules('required');
        $form->number('hits', trans('admin.hits'))->default(0);
        $form->select('classify_id','分类')->options($class)->rules('required');
        $states = [
            'on'  => ['value' => 1, 'text' => '打开', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => '关闭', 'color' => 'danger'],
        ];
        $form->switch('show', trans('admin.show'))->states($states);


        $form->display('created_at', trans('admin.created_at'));
        $form->display('updated_at', trans('admin.updated_at'));
        $form->footer(function ($footer) {

            // 去掉`查看`checkbox
            $footer->disableViewCheck();

            // 去掉`继续编辑`checkbox
            $footer->disableEditingCheck();

            // 去掉`继续创建`checkbox
            $footer->disableCreatingCheck();

        });

        return $form;
    }
}