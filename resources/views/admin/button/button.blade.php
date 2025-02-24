@if (isset($isreset) && $isreset == 'Y')
    <button class="btn btn-sm m-round bg-danger m-white resetPasswordBtn" data-toggle="tooltip" title="Edit"
        type="button" style="border:0px;width:30px;height:30px;padding-left:9px;" data-id="{{ $action->id }}"
        name="eedit" id="Resetpassword" title="reset password"><i class="fas fa-key"></i></button>
@endif


@if (isset($isView) && $isView == 'Y')
    <a class="btn btn-sm m-round bg-m-gray m-white" data-toggle="tooltip" title="View details"
        style="border:0px;width:30px;height:30px;padding-left:9px;" href="{{ $route }}"
        data-id="{{ $action->id }}" id="viewButton" name="eview" title="view"><i
            class="fa-duotone fa-solid fa-magnifying-glass"></i></a>
@endif



@if (isset($isedit) && $isedit == 'Y')
    <button class="btn btn-sm m-round bg-m-blue1 m-white editButton" data-toggle="tooltip" title="Edit" type="button"
        style="border:0px;width:30px;height:30px;padding-left:9px;" data-id="{{ $action->id }}" name="eedit"
        id="editButton" title="edit"><i class="fas fa-user-edit"></i></button>
@endif


@if (isset($isDelete) && $isDelete == 'Y')
    <button class="btn btn-sm m-round bg-m-orange m-white deleteButton" data-toggle="tooltip"
        data-id="{{ $action->id }}" title="Delete" type="button"
        style="border:0px;width:30px;height:30px;padding-left:10px;" data-id="{{ $action->id }}" name="edelete"
        id="deleteButton" title="delete"><i class="fa-duotone fa-solid fa-trash"></i></button>
@endif
