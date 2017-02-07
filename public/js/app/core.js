var Core = {

    init: function() {

        Core.initForms();
        Core.initModals();
        Core.initTables();
        Core.initDropZone();

        (function($) {

            $.fn.serializeFiles = function() {

                var obj = $(this);

                /* ADD FILE TO PARAM AJAX */
                var formData = new FormData();
                $.each($(obj).find('input[type="file"]'), function(i, tag) {

                    // console.log($(tag)[0].files);
                    $.each($(tag)[0].files, function(i, file) {

                        formData.append(tag.name, file);
                    });
                });

                var params = $(obj).serializeArray();
                $.each(params, function (i, val) {

                    formData.append(val.name, val.value);
                });

                return formData;
            };
        })(jQuery);
    },

    initDropZone:function()
    {
        window.Dropzone;
        //Dropzone.autoDiscover = false;
    },

    initTables: function()
    {
        $('#datatable-responsive').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: 'anyData',
            columns: [
                { data: 'nombre', name: 'nombre' },
                { data: 'apellidoPaterno', name: 'apellidoPaterno' },
                { data: 'apellidoMaterno', name: 'apellidoMaterno' },
                { data: 'fechaNacimiento', name: 'fechaNacimiento' },
                { data: 'telefonoCasa', name: 'telefonoCasa' },
                { data: 'telefonoMovil', name: 'telefonoMovil' },
                { data: 'correo', name: 'correo' },
                { data: 'action', name: 'action', orderable: false, searchable: false}
            ],
            "initComplete": function () {
                var api = this.api();
                api.$('td a.deleteStudent').click( function () {
                    $('#student_id').val($('td a.deleteStudent').attr('value'));
                    Core.openCloseModal();
                });
            }
        });
    },

  /* App Initialization Functions */

    initForms: function() {
        $('form.ajax').off('submit').on('submit', function(e) {
            e.preventDefault();
            Core.ajaxFormSubmit($(this));
        });

        //Welcome Message
    },

    initModals: function()
    {
        $("#storeStudent").off('click').on('click', function(e)
        {
            e.preventDefault();
            form=$('#formStoreStudent');
            console.log(form);
            Core.ajaxFormSubmit(form);
        });
        $("#updateStudent").off('click').on('click', function(e)
        {
            e.preventDefault();
            form=$('#formUpdateStudent');
            Core.ajaxFormSubmit(form);
        });
        $("#destroyStudent").off('click').on('click', function(e)
        {
            e.preventDefault();
            form=$('#formDestroyStudent');
            form.attr('action',form.attr('action')+"/"+$('#student_id').val());
            console.log(form.attr('action'));
            Core.ajaxFormSubmit(form);
        });
        $("#company_edit_details").off('click').on('click', function(e)
        {
            e.preventDefault();
            form = $('#form-edit-details');
            Core.ajaxFormSubmit(form);
        });
        $("#field-state").off('click').on('change', function(e)
        {
            e.preventDefault();
            value =$("#field-state").val();
            Core.ajaxGetInformation('getMunicipalities/'+value, 'field-municipality');
        });

    },

    ajaxGetInformation: function( url, input)
    {
        $.ajax({
            url:            url,
            type:           'get',
            dataType:       'json',
            mimeType:       "multipart/form-data",
            contentType:    false,
            cache:          false,
            processData:    false,
            success: function(response) {
                $("#"+input+" option[value]").remove();
                $("#"+input).append('<option value="0" selected="selected">Selecciona un Municipio</option>');
                response.forEach(element=>{
                    $("#"+input).append('<option value='+element.id+'>'+element.nombre+'</option>');
                });
            },
            error: function(response)
            {
            },
        });
    },

    ajaxFormSubmit: function(form) {

        var data = form.serializeArray();
        console.log(form.attr('action'));
        console.log(data);
        $.ajax({
            url:            form.attr('action'),
            type:           'post',
            data:           data,
            dataType:       'json',
            mimeType:       "multipart/form-data",
            success: function(response) {
                var showMsg = true;

                if (response.type != 'Error') {
                    if(response.data!=undefined && response.data!='' )
                    {
                        window.location.href=response.data;
                    }
                    document.getElementById(form.attr('id')).reset();
                }
                else
                {
                    showMsg=false;
                }

                if (showMsg) {
                    Core.showMessage(response.message, response.type);
                }
                Core.openCloseModal();
            },
            error: function(response)
            {
                console.log(response);
                if(response.status==422)
                {
                    Core.showMessage('Please check all the fields are completed correctly', 'error');
                }
            },
        });
    },

    openCloseModal: function()  {
        $('#modal-student').modal('toggle');
    },

    getDeleteRecordFunction: function(id, url, recordType) {

        return function() {

            return Core.deleteRecord(id, url, recordType);
        };
    },

    deleteRecord: function(id, url, recordType) {

        var postData = {};

        if (typeof id != "array")
        url += '/' + id;

        $.ajax({

            url:     url,
            type:    'post',
            success: function(response) {

                Api.processResponse(response);

                if (response.type == "Success") {

                    $('.table tbody').find('#'+response.data.id).animate({ backgroundColor: "#fbc7c7" }, "fast").animate({ opacity: "hide" }, "slow");
                }
            },
        });
    },

    showMessage: function(message, type)
    {
        var messages=document.getElementsByClassName("noty_message");

        var show=true;
        if(messages.length>0)
            if(messages[0].innerText==message)
                show=false;
        if(show)
        {
            typeNoty=type.toLowerCase();
            noty({
                text:       message,
                layout:     'top',
                closeWith:  ['click', 'click'],
                type:       typeNoty,
                timeout:    5000,
                maxVisible: 1,
            });
        }
    },

}