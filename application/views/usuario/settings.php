  <script>
  $(document).ready(function(){
    $("form").validate({
    rules: {
        PWD: {            
            required: true
        },
         NPWD: {
              minlength: 8,
            required: true
        
        },
        RPWD: {
            required: true,
            equalTo: "#NPWD"
        }
      },
  highlight: function(element) {
    $(element).closest('.control-group').removeClass('success').addClass('error');
  },
  success: function(element) {
    element
    .addClass('valid')
    .closest('.control-group').removeClass('error').addClass('success');
  }
});
  });
  </script>
</head>
<body>

    <div class="container">
    <div class="form offset3 span6 offset3" id="password_modal" style="margin-top: 40px">      
        
        <div class="modal-header headblocktitle">
            Change your password 
        </div>     
        <blockquote >
        <p class="text-warning"><abbr title="Space bar">Space</abbr> is not allow as an input.</p>
        </blockquote>
        <form action="<?php echo  URL::site('user/updatePwd') ?>">            
        <div class="modal-body form-horizontal">
   
            <div class="control-group">
                <label for="current_password" class="control-label">Current Password</label>
                <div class="controls">
                    <input  type="password" name="PWD" id="PWD" onkeydown="if (event.keyCode == 32) {event.returnValue = false;return false;}"/>
                </div>
            </div>
            <div class="control-group">
                <label for="new_password" class="control-label">New Password</label>
                <div class="controls">
                    <input type="password" name="NPWD" id="NPWD" onkeydown="if (event.keyCode == 32) {event.returnValue = false;return false;}"/>
                </div>
            </div>
            <div class="control-group">
                <label for="confirm_password" class="control-label">Confirm Password</label>
                <div class="controls">
                    <input  type="password" name="RPWD" id="RPWD" onkeydown="window.onkeydown=function(e){if(e.keyCode==32){return false;}};"/>
                </div>
            </div>      
        </div>
        <div class="modal-footer">            
            <input type="submit" class="btn btn-success" id="password_modal_save" value="Save changes"/>
            <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true" onclick="history.go(-1);">cancel</button>
        </div>
        </form>    
    </div>
    </div>    