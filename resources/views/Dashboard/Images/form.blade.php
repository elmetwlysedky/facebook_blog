<fieldset class="mb-3">
    <legend class="text-uppercase font-size-sm font-weight-bold"></legend>



    <div class="form-group row">
        <label class="col-form-label col-lg-3">Name<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::text('name_en', null,['class'=>'form-control'])!!}

        </div>
    </div>


    <div class="form-group row">
        <label class="col-form-label col-lg-3">Name<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::text('name_ar', null,['class'=>'form-control'])!!}

        </div>
    </div>



    <div class="form-group row">
        <label class="col-form-label col-lg-3">Photo<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::file('image',null,['class'=>'form-control'])!!}
        </div>
    </div>

</fieldset>
