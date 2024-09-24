<!DOCTYPE html>
<html>
<head>
    <title>Select Buttons</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<h2>Select Buttons</h2>

<button class="button" data-id="1">Button 1</button>
<button class="button" data-id="2">Button 2</button>
<button class="button" data-id="3">Button 3</button>
<button class="button" data-id="4">Button 4</button>
<button class="button" data-id="5">Button 5</button>
<button class="button" data-id="6">Button 6</button>

<div id="submitContainer"></div>

<script>
$(document).ready(function(){
    var selectedButtons = [];

    // Handle button click
    $('.button').click(function(){
        var buttonId = $(this).data('id');

        // Toggle selection
        if ($.inArray(buttonId, selectedButtons) === -1) {
            selectedButtons.push(buttonId);
            $(this).addClass('selected');
            showSubmitButton(); // Show submit button if selections are made
        } else {
            selectedButtons = $.grep(selectedButtons, function(value) {
                return value != buttonId;
            });
            $(this).removeClass('selected');
            if (selectedButtons.length === 0) {
                hideSubmitButton(); // Hide submit button if no selections are left
            }
        }
    });

    // Function to show submit button
    function showSubmitButton() {
        if ($('#submitBtn').length === 0) { // Ensure submit button is not already added
            $('#submitContainer').html('<button id="submitBtn">Submit</button>');
            $('#submitBtn').click(function(){
                sendDataToController(selectedButtons);
            });
        }
    }

    // Function to hide submit button
    function hideSubmitButton() {
        $('#submitContainer').empty();
    }

    // Function to send data to controller via Ajax
    function sendDataToController(data) {
        $.ajax({
            url: '<?php echo base_url("index.php/Dashboard/save_selected_buttons"); ?>',
            method: 'POST',
            data: { selectedButtons: data },
            success: function(response) {
                alert('Buttons saved successfully!');
                // Optionally, you can handle the response from the controller
            },
            error: function(xhr, status, error) {
                alert('Error saving buttons: ' + error);
            }
        });
    }
});
</script>

</body>
</html>
