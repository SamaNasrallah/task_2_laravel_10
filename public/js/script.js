

    $(document).ready(function() {
        $("#btn-primary").click(function() {
            alert("Added successfully");
        });
    
        $("#btn-update").click(function() {
            alert("Updated successfully");
        });
        
        $(".btn-activation").each(function() {
            var btnId = $(this).attr("id");
            var formId = btnId.replace("btn-activation", "activationForm");
            $("#" + btnId).click(function(event) {
                var isActive = $(this).find(".fa-check-circle").length > 0;
                if (isActive) {
                    alert("Folder will become in_active!");
                } else {
                    alert("Folder will become active!");
                }

            });
        });


    });

