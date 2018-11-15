<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


?>
<!---Bootstrap modal popup-->
<div class="modal fade" id="showFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

<script>
   $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
        });
    $('.saveCourse').click(function() {
        var courseDetails = $(this);
        var courseId = courseDetails.attr("data-courseid");
        var courseName = courseDetails.attr("data-coursename");
        var courseType = courseDetails.attr("data-coursetype");
       
        $.ajax({
              url: '{{ route('formSubmit') }}',
              type: "post",
              data: {
                'id':courseId, 'name': courseName,'coursetype':courseType
                    },
              dataType: 'JSON',
              success: function (data) {
                 courseDetails.hide();
              }

        });
    });
</script>
</body>
</html>