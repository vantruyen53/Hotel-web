
    <div class="time-for-serive">
        <div class="set-time mb-2 d-flex justify-content-between" id="time-frame">
            <span id="display-frame-time" class="" ></span>
            <i class="fa-solid fa-caret-down"></i>
            <input type="hidden" name="selectedOption" id="hidden-option" value="">
        </div> 
        <ul class="dropdownmenu list-unstyled position-absolute w-100">
            <li><span class="frame-time py-1">Morning:</span> 5:00 - 11:00 am</li>
            <li><span class="frame-time py-1">Afternoon:</span> 5:00 - 11:00 pm</li>
        </ul>           
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script>
        $('.set-time').click(function() {
            $('.dropdownmenu').toggleClass('show');
        });

        $('.dropdownmenu li').click(function () {
            const selectedTime = $(this).text().trim();
            $('#display-frame-time').text(selectedTime); // hiển thị
            document.getElementById('hidden-option').value = selectedTime;
            $('.dropdownmenu').removeClass('show'); // ẩn sau khi chọn
        });
    </script>