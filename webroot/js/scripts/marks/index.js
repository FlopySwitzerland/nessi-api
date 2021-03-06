/**
 * Created by rgabriel on 13.05.2017.
 */
$(document).ready(function() {
    $('.datepicker').pickadate({
        selectMonths: true,
        selectYears: 2,
        format: 'yyyy-mm-dd'
    });

    var plopfunction = function () {
        if($('#subject-id').val() != ""){
            var loadingspin = $('#loading'),
                formwrap = $('#form-loading');

            loadingspin.show();
            formwrap.hide();

            $.ajax({
                type: 'GET',
                url: baseUrl+'terms/getList.json',
                data: {subject_id: $('#subject-id').val()},
                success: function (response) {

                    var termselect = $('#term-id');

                    termselect.empty();

                    $.each(response.results, function(groupName, options) {
                        var $optgroup = $("<optgroup>", {
                            label: groupName
                        });
                        $optgroup.appendTo('#term-id');
                        $.each(options, function(i, option) {
                            var $option = $("<option>", {
                                text: option,
                                value: i
                            });
                            $option.appendTo($optgroup);
                        });
                    });

                    termselect.material_select();
                    loadingspin.hide();
                    formwrap.show();
                }
            });


        }
    }

    if($('#subject-id').val() != ""){
        plopfunction();
    }

    $('#subject-id').change(plopfunction);

    $('#ac-select').change(function () {

        $('.ac-ytabs').hide();
        $('#'+this.value).show();
    });


});
