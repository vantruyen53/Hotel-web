const btnToggle = document.querySelector('.toggle-btn');
const dropDown = document.querySelector('.dropDown');
const closeDropDown = document.querySelector('.close-toggle-btn');
const containerFluid = document.querySelector('.container-fluid');
const actionBtn = document.querySelector('.action-btn');

btnToggle.onclick = function(){
    dropDown.classList.toggle('open');
};
closeDropDown.onclick = function(){
    dropDown.classList.remove('open');
}

// scroll navbar 
const logo = document.querySelector('.compenentNav nav .logo');
const a = document.querySelectorAll('.compenentNav nav li a');
const toggleBtn = document.querySelectorAll('.compenentNav nav .toggle-btn');
$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop()){
             $(logo).addClass('scroll');
             $(a).addClass('scroll');
             $(toggleBtn).addClass('scroll');
             $(containerFluid).addClass('scroll');
             $(actionBtn).addClass('scroll');
        }else{
             $(logo).removeClass('scroll');
             $(a).removeClass('scroll');
             $(toggleBtn).removeClass('scroll');
             $(containerFluid).removeClass('scroll');
             $(actionBtn).removeClass('scroll');
        }
    });
});

// Calendar 
    document.querySelectorAll('.calendar').forEach(calenderEl =>{
        const monthYear = document.getElementById('monthYear');
        let currentDate = new Date();

        let viewDate = new Date();           
        const today  = new Date();
        today.setHours(0,0,0,0);

        let selectedDates = [];
        let selectedElements = []; 

        // Show calendar 
        renderCalendar(currentDate);
        applyPastDay()
        applySelection();

        function renderCalendar(date = new Date()){
            calenderEl.innerHTML = '';

            const year = date.getFullYear();
            const month = date.getMonth();
            const today = new Date();

            const totalDay = new Date(year, month + 1, 0).getDate();
            const firstOfMonth = new Date(year, month, 1).getDate();

            monthYear.textContent = date.toLocaleDateString("en-US", {
                month: "long",
                year: "numeric",
            });

            const weekDays = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
            weekDays.forEach(day =>{
                const dayEl = document.createElement('div');
                dayEl.className = 'day-name';
                dayEl.textContent = day;
                calenderEl.appendChild(dayEl);
            })

            for (let i = 0; i < firstOfMonth; i++){
                calenderEl.appendChild(document.createElement('div'));
            }

            for(let day = 1; day <= totalDay; day ++){
                const dateStr = `${year}-${String(month +1).padStart(2,"0")}-${String(day).padStart(2, "0")}`;

                const cell = document.createElement('div');
                cell.className = 'day';
                cell.dataset.date = `${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}-${year}`;

                if(day === today.getDate() && month === today.getMonth() &&year === today.getFullYear()){
                    cell.classList.add('today');
                }

                const dateEl = document.createElement("div");
                dateEl.className = "date-number";
                dateEl.textContent = day;
                cell.appendChild(dateEl);

                calenderEl.appendChild(cell);
            }
        }
        function changeMonth(offset) {
            currentDate.setMonth(currentDate.getMonth() + offset);
            renderCalendar(currentDate);
            applyPastDay();
            applySelection();
        }

        function applyPastDay() {
            document.querySelectorAll('.day').forEach(el => {
                const d = new Date(el.dataset.date);
                d.setHours(0,0,0,0);
                const past =
                d.getFullYear() <  today.getFullYear() ||
                (d.getFullYear() === today.getFullYear() && d.getMonth() <  today.getMonth()) ||
                (d.getFullYear() === today.getFullYear() && d.getMonth() === today.getMonth() && d.getDate() < today.getDate());
                el.classList.toggle('past-day', past);
            });
        }

        calenderEl.addEventListener('click', (e) => {
            const dayEl = e.target.closest('.day');

            if (!dayEl || !calenderEl.contains(dayEl)) return;
            if (dayEl.classList.contains('past-day')) return;

            const dateStr = dayEl.dataset.date;

            const idx = selectedDates.indexOf(dateStr);
            if (idx !== -1) {
                selectedDates.splice(idx, 1);
            } else {
                if (selectedDates.length >= 2) selectedDates.shift();
                selectedDates.push(dateStr);
            }

            if (selectedDates.length === 2) {
                const sortedDates = [...selectedDates].sort((a, b) => new Date(a) - new Date(b));
                console.log('Check-in:', sortedDates[0]);
                console.log('Check-out:', sortedDates[1]);
            }

            applySelection();
        });


        function applySelection() {
            const set = new Set(selectedDates);
            document.querySelectorAll('.day').forEach(el => {
                el.classList.toggle('choosed', set.has(el.dataset.date));
            });
        }
    });
    