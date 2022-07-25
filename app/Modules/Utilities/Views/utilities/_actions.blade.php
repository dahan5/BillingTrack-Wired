<div class="btn-group position-static">
    <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="dropdown">
        @lang('bt.options')
    </button>
    <div class="dropdown-menu dropdown-menu-end" role="menu">
        <a class="dropdown-item"
           href="{{ route('utilities.restore_trash', [$model->id, 'entity' => get_class($model)]) }}"><i
                    class="fa fa-edit"></i> @lang('bt.restore')</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#"
           onclick="swalConfirm('@lang('bt.trash_deletesingle_warning')', '', '{{ route('utilities.delete_trash',
                                    [$model->id, 'entity' => get_class($model)]) }}');"><i
                    class="fa fa-trash-alt text-red"></i> @lang('bt.delete')</a>
    </div>
</div>
