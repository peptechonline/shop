$(document).ready(function() {
    $('.nav-link').on('click', function() {
        // Remove active class from all nav links
        $('.nav-link').removeClass('active');
        // Add active class to the clicked nav link
        $(this).addClass('active');

        // Hide all content sections
        $('.content-section').addClass('d-none').css('opacity', '0');
        // Show and animate the target content section
        $($(this).data('target')).removeClass('d-none').animate({ opacity: 1 }, 300);
    });

    // let imageCounter = 1;

    // $('#addAnotherImage').on('click', function() {
    //     imageCounter++;
    //     const newImageInput = `
    //         <div class="form-group">
    //             <label for="customerImage${imageCounter}">Add Image:</label>
    //             <input type="file" class="form-control-file" id="customerImage${imageCounter}">
    //         </div>
    //     `;
    //     $('#additionalImages').append(newImageInput);
    // });
});
