    $(document).ready(function(){
        $('#build_warning').hide();

        $('#robots_select').click(function(){
            var checkbox = $('input[name=robots_check]');
            checkbox.prop('checked',!checkbox.prop('checked'));
        });

        $('#parts_select').click(function(){
            var checkbox = $('input[name=parts_check]');
            checkbox.prop('checked',!checkbox.prop('checked'));
        });

        $('#build_btn').click(function(){
            if($('input[name=top_radio]:checked').val() && $('input[name=torso_radio]:checked').val() && $('input[name=bottom_radio]:checked').val()){
                // builds robot
            }
            else{
                $('#build_warning').show().delay(3000).fadeOut();
            }
        });
    });