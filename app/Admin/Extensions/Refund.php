<?php

namespace App\Admin\Extensions;

use Encore\Admin\Admin;

class Refund
{
    protected $id;
    protected $url;

    public function __construct($id)
    {
        $this->id = $id;
        $this->url = route('refund');
    }

    protected function script()
    {
        $confirm = trans('admin.confirm');
        $cancel = trans('admin.cancel');
        return <<<SCRIPT

$('.grid-refund').on('click', function () {
    var id= $(this).data('id') 
    swal({
        title: "确定退款",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "$confirm",
        showLoaderOnConfirm: true,
        cancelButtonText: "$cancel",
        input: "text",
        inputPlaceholder: "填写退款金额",
        preConfirm: function(inputValue) {
       
        if(inputValue==''){
          swal.showValidationError("金额不能为空");	   
        }else{
             return new Promise(function(resolve) {
                $.post('$this->url', {'id': id, _token:LA.token,refund_fee:inputValue}, function (data) {
                         resolve(data);
       
                 });
            });
        }
       
        }
    }).then(function(result) {
        var data = result.value;
         console.log(data);
        if (typeof data === 'object') {
            if (data.code===1000) {
                swal(data.message, '', 'success');
            } else {
                swal(data.message, '', 'error');
            }
        }
    });
       

});

SCRIPT;
    }

    protected function render()
    {
        Admin::script($this->script());

        return "<a class='grid-refund' href='javascript:void(0);' title='退款' data-id='{$this->id}'><i class='fa fa-reply'></i></a>";
    }

    public function __toString()
    {
        return $this->render();
    }
}