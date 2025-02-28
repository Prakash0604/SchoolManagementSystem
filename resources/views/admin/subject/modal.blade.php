<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <form id="addForm" class="addForm">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Subject Form</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="page-wrapper">
                            <!-- Page-body start -->
                            <div class="page-body">
                                <!-- Row start -->
                                <div class="row">

                                    <h3 class="text-center w-100" id="sessionHeading" style="line-height:20px;">
                                         Subject
                                        <br>
                                        <div class="bg-gradient-blue"
                                            style="width:20px;height:7px;border-radius:10px;display:inline-block;">
                                        </div>
                                        <span class="f-12 m-dblue"
                                            style="display:inline-block;font-weight:100;">Required*</span>
                                        <div class="bg-gradient-gray m-l-10"
                                            style="width:20px;height:7px;border-radius:10px;display:inline-block;">
                                        </div>
                                        <span class="f-12 gradient-gray"
                                            style="display:inline-block;font-weight:100;">Optional</span>
                                    </h3>
                                </div>

                                <div class="row" style="border:0px solid #9698d6;padding:5px 5px 5px 15px;">
                                    <input type="hidden" name="id" id="subject_id">
                                    @csrf

                                    <div class="col-lg-12">
                                        <div class="m-div">
                                            <label class="m-label bg-gradient-blue m-white">Subject*</label>
                                            <input type="text" class="form-control m-field" placeholder=""
                                                name="title" id="subject_title">
                                        </div>
                                    </div>
                                    <span id="title-error" class="text-danger error-message"></span>
                                </div>
                            </div>
                            <!-- Page-body end -->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" style="width:100px;padding:10px;border-radius:20px"
                        data-bs-dismiss="modal">Close</button>

                    <button type="submit" class="btn btn-warning" style="width:100px;padding:10px;border-radius:20px"
                        id="createBtn">Create</button>

                    <button type="submit" class="btn btn-warning" style="width:100px;padding:10px;border-radius:20px"
                        id="updateBtn">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
