document.addEventListener('DOMContentLoaded', function () {
  (function () {
    const calendarEl = document.getElementById('calendar'),
      addEventSidebar = document.getElementById('addEventSidebar'),
      appOverlay = document.querySelector('.app-overlay'),
      offcanvasTitle = document.querySelector('.offcanvas-title'),
      btnSubmit = document.querySelector('button[type="submit"]'),
      btnDeleteEvent = document.querySelector('.btn-delete-event'),
      inlineCalendar = document.querySelector('.inline-calendar');

    let eventToUpdate,
      currentEvents = events,
      isFormValid = false,
      inlineCalInstance;

    const bsAddEventSidebar = new bootstrap.Offcanvas(addEventSidebar);




    if (inlineCalendar) {
      inlineCalInstance = inlineCalendar.flatpickr({
        monthSelectorType: 'static',
        inline: true
      });
    }

    function eventClick(info) {
      eventToUpdate = info.event;
      if (eventToUpdate.url) {
        info.jsEvent.preventDefault();
        window.open(eventToUpdate.url, '_blank');
      }
      bsAddEventSidebar.show();
      if (offcanvasTitle) {
        offcanvasTitle.innerHTML = 'Update Event';
      }
      btnSubmit.innerHTML = 'Update';
      btnSubmit.classList.add('btn-update-event');
      btnSubmit.classList.remove('btn-add-event');
      btnDeleteEvent.classList.remove('d-none');

      eventTitle.value = eventToUpdate.title;
      start.setDate(eventToUpdate.start, true, 'Y-m-d');

      if (eventToUpdate.end !== null) {
        end.setDate(eventToUpdate.end, true, 'Y-m-d');
      } else {
        end.setDate(eventToUpdate.start, true, 'Y-m-d');
      }
    }

    function selectedCalendars() {
      let selected = [],
        filterInputChecked = [].slice.call(document.querySelectorAll('.input-filter:checked'));

      filterInputChecked.forEach(item => {
        selected.push(item.getAttribute('data-value'));
      });

      return selected;
    }



    let calendar = new Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      plugins: [dayGridPlugin, interactionPlugin, listPlugin, timegridPlugin],
      editable: true,
      dragScroll: true,
      dayMaxEvents: 2,
      eventResizableFromStart: true,
      headerToolbar: {
        start: 'prev,next, title',
        end: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      initialDate: new Date(),
      navLinks: true,
      eventClassNames: function ({ event: calendarEvent }) {
        const colorName = calendarsColor[calendarEvent._def.extendedProps.calendar];
        return ['fc-event-' + colorName];
      },
      dateClick: function (info) {
        let date = moment(info.date).format('YYYY-MM-DD');
        resetValues();
        bsAddEventSidebar.show();
        if (offcanvasTitle) {
          offcanvasTitle.innerHTML = 'Add Event';
        }
        btnSubmit.innerHTML = 'Add';
        btnSubmit.classList.remove('btn-update-event');
        btnSubmit.classList.add('btn-add-event');
        btnDeleteEvent.classList.add('d-none');
        eventStartDate.value = date;
        eventEndDate.value = date;
      },
      eventClick: function (info) {
        eventClick(info);
      }
    });

    calendar.render();

    const eventForm = document.getElementById('eventForm');
    const fv = FormValidation.formValidation(eventForm, {
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap5: new FormValidation.plugins.Bootstrap5({
          eleValidClass: '',
          rowSelector: function (field, ele) {
            return '.mb-3';
          }
        }),
        submitButton: new FormValidation.plugins.SubmitButton(),
        autoFocus: new FormValidation.plugins.AutoFocus()
      }
    })
      .on('core.form.valid', function () {
        isFormValid = true;
      })
      .on('core.form.invalid', function () {
        isFormValid = false;
      });

    function addEvent(eventData) {
      currentEvents.push(eventData);
      calendar.refetchEvents();
    }

    function updateEvent(eventData) {
      eventData.id = parseInt(eventData.id);
      currentEvents[currentEvents.findIndex(el => el.id === eventData.id)] = eventData;
      calendar.refetchEvents();
    }

    function removeEvent(eventId) {
      currentEvents = currentEvents.filter(function (event) {
        return event.id != eventId;
      });
      calendar.refetchEvents();
    }

    btnSubmit.addEventListener('click', e => {
      if (btnSubmit.classList.contains('btn-add-event')) {
        if (isFormValid) {
          let newEvent = {
            id: calendar.getEvents().length + 1,
            display: 'block'
          };
          addEvent(newEvent);
          bsAddEventSidebar.hide();
        }
      } else if (btnSubmit.classList.contains('btn-update-event')) {
        if (isFormValid) {
          let updatedEvent = {
            id: eventToUpdate.id,
            display: 'block'
          };
          updateEvent(updatedEvent);
          bsAddEventSidebar.hide();
        }
      }
    });

    if (btnDeleteEvent) {
      btnDeleteEvent.addEventListener('click', e => {
        if (eventToUpdate) {
          removeEvent(eventToUpdate.id);
          bsAddEventSidebar.hide();
        }
      });
    }

    appOverlay.addEventListener('click', e => {
      bsAddEventSidebar.hide();
    });

    function resetValues() {
    }

    const filters = document.querySelectorAll('.calendar-events-filter');
    filters.forEach(function (filter) {
      filter.addEventListener('change', function () {
        fetchEvents({
          events: currentEvents
        }, calendar.render);
      });
    });
  })();
});
