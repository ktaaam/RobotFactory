<div id="content">
    <div id="parts">
        <h2>List of all parts</h2>
        <!-- for all tables set a max height and add a scroll bar -->
        <table id="parts_table" class="table table-hover">
            <tr>
                <th></th>
                <th>Part Code</th>
                <th>Facility Built</th>
                <th>Date Built</th>
            </tr>
            {parts}
                <tr>
                    <td><input name="parts_check" type="checkbox" /></td>
                    <td>{part_code}</td>
                    <td>{built_at}</td>
                    <td>{date_built}</td>
                </tr>
            {/parts}
        </table>
        <!-- make buttons look better -->
        <button>Return Selected</button><button id="parts_select">Select All</button>
    </div>

    <!-- for the "Build a robot" div, split the table into 3 columns --> 
    <div id="combine">
    <h2>Build a robot</h2>        
        <div>
            <h3>Robot Top</h3>
            <table id="top_table" class="table table-hover">
                <tr>
                    <th></th>
                    <th>Part Code</th>
                    <th>Facility Built</th>
                    <th>Date Built</th>
                </tr>
                {top}
                    <tr>
                        <td><input name="top_radio" type="radio" /></td>
                        <td>{part_code}</td>
                        <td>{built_at}</td>
                        <td>{date_built}</td>
                    </tr>
                {/top}
            </table>
        </div>
        <div>
        <h3>Robot Torso</h3>
        <table id="torso_table" class="table table-hover">
            <tr>
                <th></th>
                <th>Part Code</th>
                <th>Facility Built</th>
                <th>Date Built</th>
            </tr>
            {torso}
                <tr>
                    <td><input name="torso_radio" type="radio" /></td>
                    <td>{part_code}</td>
                    <td>{built_at}</td>
                    <td>{date_built}</td>
                </tr>
            {/torso}
        </table>
        </div>
        <div>
        <h3>Robot Bottom</h3>
        <table id="bottom_table" class="table table-hover">
            <tr>
                <th></th>
                <th>Part Code</th>
                <th>Facility Built</th>
                <th>Date Built</th>
            </tr>
            {bottom}
                <tr>
                    <td><input name="bottom_radio" type="radio"/></td>
                    <td>{part_code}</td>
                    <td>{built_at}</td>
                    <td>{date_built}</td>
                </tr>
            {/bottom}
        </table>
        </div>
        <div class="alert alert-danger" id="build_warning">
            <strong>Please Select One of each robot part!</strong>
         </div>
        <button id="build_btn">Build</button>
    </div>
    <div id="robots">
    <h2>List of all robots</h2>
        <table id="robots_table" class="table table-hover">
            <tr>
                <th></th>
                <th>Robot Top</th>
                <th>Robot Torso</th>
                <th>Robot Bottom</th>
            </tr>
            {robots}
                <tr>
                    <td><input name="robots_check" type="checkbox" /></td>
                    <td>{top}</td>
                    <td>{torso}</td>
                    <td>{bottom}</td>
                </tr>
            {/robots}
        </table>
         <button>Sell Selected</button><button id="robots_select">Select All</button>
    </div>
    <script>
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
    </script>
</div>