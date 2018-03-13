<script>

    var inputIds = ['#message-content'];

    function setupMessageValidation() {
        $('#message-content').on('input', function () {
            simpleJQueryValidation(this, '#message-content-validation');
        });
    }

    function loadMessageModal(elem) {

        var messageId = $(elem).attr("id");
        var messageContentId = "#message-" + messageId + "-content";
        var messageContent = $(messageContentId).text();

        console.log(messageContentId);

        $("#message-modal").trigger("reset");
        resetJQueryValidation(inputIds);

        $("#message-id").val(messageId);
        $("#message-content").val(messageContent);

        $("#modal").modal();

    }

    function submitMessage() {

        var valid = true;
        $.each(inputIds, function(index, value) {
            valid = simpleJQueryValidity(value + '-validation') ? valid ? true : false : false;
        });
        if(valid) {
            $("#inputs").hide();
            $("#input-buttons").hide();
            $("#loading-info").show();
            $('#message-form').submit();
        }
    }

</script>