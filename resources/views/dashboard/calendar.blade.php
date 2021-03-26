@extends('layout.dash')

@section('style')
<style>
.fc-header-toolbar {
    display: none !important;
}
.fc-timeGridDay-view table thead {
    display: none;
}
.fc .fc-timegrid-col.fc-day-today {
    background-color: #fff !important;
}
.fc-event {
    border-left: 6px solid #F2CB05;
    border-radius : 0px !important;
}
.fc-event .fc-event-title {
    font-size: 16px;
    font-weight: 600;
    position:absolute;
    top:50%;
    transform:translate(10%,-50%);
    -ms-transform:translate(10%,-50%);
}
.fc-v-event .fc-event-time {
    font-size: 15px;
    position: absolute;
    top: 50%;
    transform: translate(25%,-50%);
    margin-top: 10px;
}

.fc-direction-ltr .fc-timegrid-now-indicator-arrow {
    left: 0;
    border-width: 10px 25px 10px 11px;
    border-radius: 0px 10px 10px 0px;
    opacity: .7;
}
.fc .fc-timegrid-now-indicator-arrow {
    position: absolute;
    z-index: 4;
    margin-top: -10px;
    border-style: solid;
    border-color: #F2CB05;
}
.fc .fc-timegrid-now-indicator-line {
    opacity: .7;
    position: absolute;
    z-index: 4;
    left: 0;
    right: 0;
    margin-top: -1px;
    border-style: solid;
    border-color: #F2CB05;
    border-color: var(--fc-now-indicator-color,#F2CB05);
    border-width: 3px 0 0;
}
.fc-theme-standard .fc-scrollgrid {
    border: none;
}

.fc .fc-scrollgrid-section-liquid > td  {
    border-bottom: none;
}
.fc-theme-standard td, .fc-theme-standard th {
    border-left: 0px;
    border-right: 0px;
}
</style>

@endsection('style')

@section('content')
    <!-- Header -->
    <div class="header">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <!-- <h6 class="h1 text-white d-inline-block mb-0 txt-dark">Calendar</h6> -->
                        <h1 class="d-inline-block mb-0 txt-dark my-auto txt-12">Calendar</h1>
                        &nbsp;&nbsp;&nbsp;
                        <a href="/schedule" class="h1 d-inline-block mb-0 txt-dark my-auto medium txt-11">Scheduling</a>
                        <p>These are your appointments today.</p>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <button type="button" class="btn btn-twitter btn-icon-only rounded-circle">
                            <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
                        </button>
                        <div class="dropdown">
                            <a class="btn btn-sm btn-icon-only text-light bg-white shadow" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid">

        <div class="card">
            <div class="card-header border-0">
                <div class="row">
                    <div class="col">
                        <button type="button" class="btn btn-icon-only rounded-circle btn-4 calendar-btn-prev">
                            <span class="btn-inner--icon"><i class="fa fa-arrow-left"></i></span>
                        </button>
                        <h6 class="d-inline-block mb-0 txt-10 calendar-title">MM-DD-YYYY</h6>
                        <button type="button" class="btn btn-icon-only rounded-circle btn-4 calendar-btn-next">
                            <span class="btn-inner--icon"><i class="fa fa-arrow-right"></i></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body container-fluid pt-0">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="f-calendar on-scrollbar" id="f-calendar"></div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group">
                            <div class="input-group input-group-merge">
                                <div class="input-group-prepend form-5-prepend">
                                    <span class="input-group-text"><i class="fa fa-search"></i></span>
                                </div>
                                <input class="form-control text-center form-5" placeholder="SEARCH FOR AN APPOINTMENT" type="text">
                            </div>

                            <div>
                                <section class="date_picker_wrapper" id="date_picker_1">
                                    <div class="date_picker_header">
                                        <button class="date_picker_year"></button>
                                        <h3 class="date_picker_month_day"></h3>
                                    </div>
                                    <div class="date_picker_body">
                                        <div class="date_picker_month_navigation">
                                            <button type="button" class="btn bg-base btn-icon-only rounded-circle date_picker_prev_month date_picker_month_nav_btn">
                                                <span class="btn-inner--icon"><i class="fa fa-arrow-left"></i></span>
                                            </button>
                                            <h2 class="date_picker_month_name"></h2>
                                            <button class="btn bg-base btn-icon-only rounded-circle date_picker_next_month date_picker_month_nav_btn">
                                                <span class="btn-inner--icon"><i class="fa fa-arrow-right"></i></span>
                                            </button>
                                        </div>
                                        <ul class="date_picker_month_days">
                                            <li>S</li>
                                            <li>M</li>
                                            <li>T</li>
                                            <li>W</li>
                                            <li>T</li>
                                            <li>F</li>
                                            <li>S</li>
                                        </ul>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

@endsection


@section('script')
<script>
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        today = mm + '' + dd + '/' + yyyy;
        var choosedDate = yyyy + '-' + mm + '-' + dd;
    $(".pay-img").on("click", function() {
        // $.ajax({
        //     url: '/sign-up',
        //     method: 'post',
        //     data: {

        //     },
        //     dataType: false,
        //     success: function(data) {
        //         alert(data)
        //     }
        // });
        window.location.href = "/search";
    });


    $(".calendar-btn-next").on("click", function() {
        $(".fc-next-button").click();
        $(".calendar-title").text($(".fc-toolbar-title").text());
    });
    $(".calendar-btn-prev").on("click", function() {
        $(".fc-prev-button").click();
        $(".calendar-title").text($(".fc-toolbar-title").text());
    });
    $(document).ready(function() {
        $(".calendar-title").text($(".fc-toolbar-title").text());
        drawCalendar();
    })
    function drawCalendar() {
        var calendarEl = document.getElementById("f-calendar");

        var calendar = new FullCalendar.Calendar(calendarEl, {
            eventTextColor: "#0f2231",
            allDaySlot: false,
            height: 650,
            expandRows: true,
            slotMinTime: "00:00",
            slotMaxTime: "24:00",
            headerToolbar: {
                left: "prev,next today",
                center: "title",
                right: "dayGridMonth,timeGridWeek,timeGridDay,listWeek",
            },
            initialView: "timeGridDay",
            initialDate: choosedDate,
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            selectable: true,
            nowIndicator: true,
            dayMaxEvents: true, // allow "more" link when too many events
            events: [
                {   
                    eventClassNames : "aaa",
                    title: "Maintenance in House Blabla",
                    start: choosedDate+"T09:10:00",
                    end  : choosedDate+"T11:00:00",
                    color: "#FCF5CD",
                    borderColor : "#F2CB05",
                },
                
                {   
                    eventClassNames : "bbb",
                    title: "Maintenance in House Blabla",
                    start: choosedDate+"T14:23:00",
                    end  : choosedDate+"T17:48:00",
                    color: "#D7F2DA",
                    borderColor : "#39BC48",
                },
            ]
        });

        calendar.render();
    }

    // Date Picker Start
    const CONSTANTS = {
        DOM_SELECTORS: {
            datePicker: "",
            datePickerPrevMonth: ".date_picker_prev_month",
            datePickerNextMonth: ".date_picker_next_month",
            datePickerMonthDays: ".date_picker_month_days",
            datePickerMonthDay: ".date_picker_month_day",
            datePickerYear: ".date_picker_year",
            datePickerMonthName: ".date_picker_month_name",
            datePickerDay: ".day",
        },
        DOM_STRINGS: {
            dataTime: "li[data-time]",
        },
        DUMMY_LI_FOR_EMPTY_DAYS: '<li class="day"></li>',
        DAY_MAP: {
            0: "Sun",
            1: "Mon",
            2: "Tue",
            3: "Wed",
            4: "Thu",
            5: "Fri",
            6: "Sat",
        },
        MONTH_MAP: {
            0: "January",
            1: "February",
            2: "March",
            3: "April",
            4: "May",
            5: "June",
            6: "July",
            7: "August",
            8: "September",
            9: "October",
            10: "November",
            11: "December",
        },
    };

    const utils = (function () {
        function prefixDOMSelectorsWithPickerSelector(pickerSelector) {
            let DOM_SELECTORS = {};
            for (let selector in CONSTANTS.DOM_SELECTORS) {
                DOM_SELECTORS[selector] = `${pickerSelector} ${CONSTANTS.DOM_SELECTORS[selector]}`.trim();
            }
            CONSTANTS.DOM_SELECTORS = DOM_SELECTORS;
        }

        function getDOMElements(DOMSelectors) {
            let DOMElements = {};
            for (let selector in DOMSelectors) {
                if (DOMSelectors.hasOwnProperty(selector)) {
                    DOMElements[selector] = document.querySelector(DOMSelectors[selector]);
                }
            }
            return DOMElements;
        }

        function getDatePickerWeekDaysNameMarkUp() {
            return `
<li>Sun</li>
<li>Mon</li>
<li>Tue</li>
<li>Wed</li>
<li>Thu</li>
<li>Fri</li>
<li>Sat</li>`;
        }

        function getDayMarkup(day = 1, isActive = false, time = null) {
            if (!time) {
                console.trace(`The time provided for getDayMarkup ${time} is invalid`);
            }
            return `
<li class="day" data-time="${time}">
    <button class="${isActive ? "active" : ""}">${day}</button>
</li>`;
        }

        function getAllDays() {
            let days = document.querySelectorAll(CONSTANTS.DOM_SELECTORS.datePickerDay);
            return [...(days ?? [])];
        }

        function getDaySuffix(day) {
            switch (day) {
                case 1:
                case 21:
                case 31:
                    return "st";
                case 2:
                case 22:
                    return "nd";
                case 3:
                case 23:
                    return "rd";
                default:
                    return "th";
            }
        }

        return {
            prefixDOMSelectorsWithPickerSelector,
            getDOMElements,
            getDatePickerWeekDaysNameMarkUp,
            getDayMarkup,
            getAllDays,
            getDaySuffix,
        };
    })();

    const model = (function () {
        const data = {
            currentDate: new Date(),
            selectedDate: new Date(),
        };

        function setCurrentDate(newDate) {
            data.currentDate = newDate;
        }

        function setSelectedDate(newDate) {
            data.selectedDate = newDate;
        }

        function getCurrentDate() {
            return data.currentDate;
        }

        function getSelectedDate() {
            return data.selectedDate;
        }

        return { setCurrentDate, setSelectedDate, getCurrentDate, getSelectedDate };
    })();

    const view = (function (model, utils) {
        function removeDays() {
            const allDays = utils.getAllDays();
            allDays.forEach((day) => day.remove());
        }

        function fillEmptyDays(count) {
            const DOMElements = utils.getDOMElements(CONSTANTS.DOM_SELECTORS);
            for (let i = 0; i < count; i++) {
                DOMElements.datePickerMonthDays.insertAdjacentHTML("beforeend", CONSTANTS.DUMMY_LI_FOR_EMPTY_DAYS);
            }
        }

        function fillDay(day, isActive = false, time) {
            const dayMarkUp = utils.getDayMarkup(day, isActive, time);
            const DOMElements = utils.getDOMElements(CONSTANTS.DOM_SELECTORS);
            DOMElements.datePickerMonthDays.insertAdjacentHTML("beforeend", dayMarkUp);
        }

        function fillCurrentMonth(string) {
            const DOMElements = utils.getDOMElements(CONSTANTS.DOM_SELECTORS);
            DOMElements.datePickerMonthName.textContent = string;
        }

        function fillSelectedDate(month, date, day, year) {
            const DOMElements = utils.getDOMElements(CONSTANTS.DOM_SELECTORS);
            DOMElements.datePickerMonthDay.innerHTML = `${CONSTANTS.MONTH_MAP[month]} ${date}<sup>${utils.getDaySuffix(date)}</sup>, ${CONSTANTS.DAY_MAP[day]}`;
            DOMElements.datePickerYear.textContent = year;
        }

        return {
            removeDays,
            fillEmptyDays,
            fillDay,
            fillCurrentMonth,
            fillSelectedDate,
        };
    })(model, utils);

    const controller = (function (model, view, utils) {
        let DOMElements = null;
        function init(pickerSelector = "", selectedDate = new Date()) {
            utils.prefixDOMSelectorsWithPickerSelector(pickerSelector);
            DOMElements = utils.getDOMElements(CONSTANTS.DOM_SELECTORS);
            if (!DOMElements.datePicker) {
                throw new Error(`Date Picker with selector ${pickerSelector} not found in the document`);
            }
            DOMElements.datePickerNextMonth.addEventListener("click", handleNextMonthClick);
            DOMElements.datePickerPrevMonth.addEventListener("click", handlePrevMonthClick);
            DOMElements.datePickerMonthDays.addEventListener("click", handleSelectDate);
            if (selectedDate.constructor !== Date) {
                throw new Error(`The initial date ${selectedDate} is not a Date Object`);
            }
            let clonedSelectedDate = new Date(selectedDate.getTime());
            let clonedCurrentDate = new Date(selectedDate.getTime());
            model.setSelectedDate(clonedSelectedDate);
            model.setCurrentDate(clonedCurrentDate);
            render(selectedDate);
        }

        function handleSelectDate(event) {
            const time = event.target.closest(CONSTANTS.DOM_STRINGS.dataTime)?.dataset.time;
            if (!time) return;
            model.setSelectedDate(new Date(Number(time)));
            model.setCurrentDate(new Date(Number(time)));
            render();
        }

        function handleNextMonthClick() {
            render();
        }

        function handlePrevMonthClick() {
            let currentDate = new Date(model.getCurrentDate().getTime());
            currentDate.setMonth(currentDate.getMonth() - 2);
            model.setCurrentDate(currentDate);
            render();
        }

        function render(selectedDate = null) {
            updateSelectedDateMarkUp();
            view.removeDays();
            let currentDate = new Date(selectedDate?.getTime() ?? model.getCurrentDate().getTime());
            let selected = model.getSelectedDate();
            let selectedDay = selected.getDate();
            let selectedMonth = selected.getMonth();
            let selectedYear = selected.getFullYear();
            currentDate.setDate(1);
            let renderingMonth = currentDate.getMonth();
            view.fillEmptyDays(currentDate.getDay());
            view.fillCurrentMonth(`${CONSTANTS.MONTH_MAP[renderingMonth]} - ${currentDate.getFullYear()}`);
            while (currentDate.getMonth() === renderingMonth) {
                let currentMonth = currentDate.getMonth();
                let currentDay = currentDate.getDate();
                let currentYear = currentDate.getFullYear();
                let currentStringDate = `${currentDay}/${currentMonth + 1}/${currentYear}`;
                let selectedStringDate = `${selectedDay}/${selectedMonth + 1}/${selectedYear}`;
                view.fillDay(currentDate.getDate(), selectedStringDate === currentStringDate, currentDate.getTime());
                currentDate.setDate(currentDay + 1);
            }
            model.setCurrentDate(currentDate);
        }

        function updateSelectedDateMarkUp() {
            const currentDate = new Date(model.getSelectedDate().getTime());
            view.fillSelectedDate(currentDate.getMonth(), currentDate.getDate(), currentDate.getDay(), currentDate.getFullYear());

            dd = String(currentDate.getDate()).padStart(2, '0');
            mm = String(currentDate.getMonth() + 1).padStart(2, '0'); 
            yyyy = currentDate.getFullYear();

            var setedDate = yyyy + '-' + mm + '-' + dd;
            choosedDate = setedDate;
            drawCalendar();
            $(".calendar-title").text($(".fc-toolbar-title").text());
        }

        return { init };
    })(model, view, utils);

    controller.init("#date_picker_1");
</script>
@endsection