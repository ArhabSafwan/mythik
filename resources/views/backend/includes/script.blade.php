<script src="{{asset('/')}}app-assets/vendor/libs/jquery/jquery.js"></script>
<script src="{{asset('/')}}app-assets/vendor/libs/popper/popper.js"></script>
<script src="{{asset('/')}}app-assets/vendor/js/bootstrap.js"></script>
<script src="{{asset('/')}}app-assets/vendor/libs/node-waves/node-waves.js"></script>
<script src="{{asset('/')}}app-assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="{{asset('/')}}app-assets/vendor/libs/hammer/hammer.js"></script>
<script src="{{asset('/')}}app-assets/vendor/libs/i18n/i18n.js"></script>
<script src="{{asset('/')}}app-assets/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="{{asset('/')}}app-assets/vendor/js/menu.js"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{asset('/')}}app-assets/vendor/libs/datatables-bs5/jszip.min.js"></script>
<script src="{{asset('/')}}app-assets/vendor/libs/datatables-bs5/Sortable.min.js"></script>
<script src="{{asset('/')}}app-assets/vendor/libs/apex-charts/apexcharts.js"></script>
<script src="{{asset('/')}}app-assets/vendor/libs/swiper/swiper.js"></script>
<script src="{{asset('/')}}app-assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<script src="{{asset('/')}}app-assets/vendor/libs/fullcalendar/fullcalendar.js"></script>

<script src="{{asset('/')}}app-assets/vendor/libs/cleavejs/cleave.js"></script>
<script src="{{asset('/')}}app-assets/vendor/libs/cleavejs/cleave-phone.js"></script>
<script src="{{asset('/')}}app-assets/vendor/libs/moment/moment.js"></script>
<script src="{{asset('/')}}app-assets/vendor/libs/flatpickr/flatpickr.js"></script>
<script src="{{asset('/')}}app-assets/vendor/libs/select2/select2.js"></script>
{{-- <script src="{{asset('/')}}app-assets/vendor/libs/select2/select2.js"></script> --}}

<script src="{{asset('/')}}app-assets/js/form-layouts.js"></script>
<!-- Toastr -->
<script src="{{asset('/')}}app-assets/vendor/libs/toastr/toastr.js"></script>
<script src="{{asset('/')}}app-assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
<script src="{{asset('/')}}app-assets/js/extended-ui-sweetalert2.js"></script>
<!-- Main JS -->
<script src="{{asset('/')}}app-assets/js/main.js"></script>

<!-- Page JS -->
<script src="{{asset('/')}}app-assets/js/dashboards-analytics.js"></script>
<script src="{{asset('/')}}app-assets/js/app-calendar-events.js"></script>
<script src="{{asset('/')}}app-assets/js/app-calendar.js"></script>
<script src="{{asset('/')}}app-assets/js/app-email.js"></script>

   {{-- <script src="{{asset('/')}}app-assets/js/chart.min.js"></script> --}}
   {{-- <script src="{{asset('/')}}app-assets/js/chart-chartjs.js"></script> --}}
<script src="{{asset('/')}}summernote/summernote-lite.min.js"></script>


<script>
    $(document).ready(function () {
    $('#summernote').summernote({
        height: 400,
       fontNames: [
            'Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Georgia',
            'Impact', 'Lucida Console', 'Lucida Sans Unicode', 'Palatino Linotype',
            'Tahoma', 'Times New Roman', 'Trebuchet MS', 'Verdana',
            'Roboto', 'Open Sans', 'Lato', 'Montserrat', 'Oswald',
            'Poppins', 'Raleway', 'Nunito', 'Merriweather', 'Ubuntu',
            'Quicksand', 'Playfair Display', 'Source Sans Pro', 'PT Sans', 'Rubik'
        ],
        fontSizes: ['8', '9', '10', '11', '12', '14', '18', '24', '36', '48', '64', '82', '150'],
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
            ['fontname', ['fontname']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph', 'height']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video', 'hr']],
            ['misc', ['undo', 'redo']],
            ['view', ['fullscreen', 'codeview', 'help']],
            ['custom', ['copy', 'cut', 'paste']]
        ],
        buttons: {
            copy: function () {
                return $.summernote.ui.button({
                    contents: '<i class="note-icon-clipboard"></i> Copy',
                    tooltip: 'Copy',
                    click: function () {
                        document.execCommand('copy');
                    }
                }).render();
            },
            cut: function () {
                return $.summernote.ui.button({
                    contents: '<i class="note-icon-scissors"></i> Cut',
                    tooltip: 'Cut',
                    click: function () {
                        document.execCommand('cut');
                    }
                }).render();
            },
            paste: function () {
                return $.summernote.ui.button({
                    contents: '<i class="note-icon-paste"></i> Paste',
                    tooltip: 'Paste (Ctrl+V)',
                    click: function () {
                        alert('Use Ctrl+V to paste.');
                    }
                }).render();
            }

        },
        dialogsInBody: true,
        placeholder: 'Start typing here...',
    });
});

    function deleteConfirmation(id,url) {
        confirmText = document.querySelector("#confirm-text_" + id);
        if (confirmText) {
            confirmText.onclick = function () {
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to delete this!",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonText: "Yes, delete it!",
                    customClass: {
                        confirmButton: "btn btn-primary me-3 waves-effect waves-light",
                        cancelButton: "btn btn-label-secondary waves-effect waves-light",
                    },
                    buttonsStyling: false,
                }).then(function (e) {
                    if (e.value === true) {
                        $.ajax({
                            type: "DELETE",
                            url: url,
                            data: {
                                _token: "{{ csrf_token() }}",
                                id: id,
                            },
                            success: function (resp) {
                                $('.datatables-products').load(location.href + ' .datatables-products');
                                Swal.fire({
                                    icon: "success",
                                    title: "Deleted!",
                                    text: "Your file has been deleted.",
                                    customClass: {
                                        confirmButton: "btn btn-success waves-effect waves-light",
                                    },
                                });
                            },
                            error: function (resp) {
                                Swal.fire({
                                    icon: "warning",
                                    title: "Deleted!",
                                    text: "Your file has been not deleted.",
                                    customClass: {
                                        confirmButton: "btn btn-success waves-effect waves-light",
                                    },
                                });
                            },
                        });
                    } else {
                        e.dismiss;
                    }
                });
            };
        }
    }

    function dynamicStatusChange(id,status,url) {
        confirmText = document.querySelector("#confirm-text_" + id + "_" + status);
        if (confirmText) {
            confirmText.onclick = function () {
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to change  this status!",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonText: "Yes, change it!",
                    customClass: {
                        confirmButton: "btn btn-primary me-3 waves-effect waves-light",
                        cancelButton: "btn btn-label-secondary waves-effect waves-light",
                    },
                    buttonsStyling: false,
                }).then(function (e) {
                    if (e.value === true) {
                        $.ajax({
                            type: "GET",
                            url: url,
                            data: {
                                _token: "{{ csrf_token() }}",
                                id: id,
                                status:status
                            },
                            success: function (resp) {
                                $('.datatables-products').load(location.href + ' .datatables-products');
                                Swal.fire({
                                    icon: "success",
                                    title: "Status!",
                                    text: "Your status has been change.",
                                    customClass: {
                                        confirmButton: "btn btn-success waves-effect waves-light",
                                    },
                                });
                            },
                            error: function (resp) {
                                Swal.fire({
                                    icon: "warning",
                                    title: "Status!",
                                    text: "Your status has been change.",
                                    customClass: {
                                        confirmButton: "btn btn-success waves-effect waves-light",
                                    },
                                });
                            },
                        });
                    } else {
                        e.dismiss;
                    }
                });
            };
        }
    }
</script>
<script>


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    //toster initilaxitions
    @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.success("{{ session('message') }}");
    @endif

    @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.error("{{ session('error') }}");
    @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.info("{{ session('info') }}");
    @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.warning("{{ session('warning') }}");
    @endif

    $(".filter-btn").click(function() {
        $(".filter").slideToggle(300);
    });
    function resetForm() {
        var form = document.getElementById('searchForm');
        form.reset();

        $('.select2').val(null).trigger('change');
    }




    $(document).ready(function () {
        $("#image").on("change",function (event) {
            let image = $(this).closest(".image-div").find(".image-show");
            image.attr("src",URL.createObjectURL(event.target.files[0]));
        });
    });
    $(document).ready(function () {
        $("#small_image").on("change",function (event) {
            let image = $(this).closest(".image-div-first").find(".image-show-first");
            image.attr("src",URL.createObjectURL(event.target.files[0]));
        });
    });
    $(document).ready(function () {
        $("#first-image").on("change",function (event) {
            let image = $(this).closest(".first-div").find(".first-div-show");
            image.attr("src",URL.createObjectURL(event.target.files[0]));
        });
    });
    $(document).ready(function () {
        $("#second-image").on("change",function (event) {
            let image = $(this).closest(".second-div").find(".second-div-show");
            image.attr("src",URL.createObjectURL(event.target.files[0]));
        });
    });
    $(document).ready(function () {
        $("#third-image").on("change",function (event) {
            let image = $(this).closest(".third-div").find(".third-div-show");
            image.attr("src",URL.createObjectURL(event.target.files[0]));
        });
    });
    $(document).ready(function () {
        $("#fourth-image").on("change",function (event) {
            let image = $(this).closest(".fourth-div").find(".fourth-div-show");
            image.attr("src",URL.createObjectURL(event.target.files[0]));
        });
    });
    $(document).ready(function () {
        $("#five-image").on("change",function (event) {
            let image = $(this).closest(".five-div").find(".five-div-show");
            image.attr("src",URL.createObjectURL(event.target.files[0]));
        });
    });
    $(document).ready(function () {
        $("#six-image").on("change",function (event) {
            let image = $(this).closest(".six-div").find(".six-div-show");
            image.attr("src",URL.createObjectURL(event.target.files[0]));
        });
    });
    $(document).ready(function () {
        $("#seven-image").on("change",function (event) {
            let image = $(this).closest(".seven-div").find(".seven-div-show");
            image.attr("src",URL.createObjectURL(event.target.files[0]));
        });
    });
    $(document).ready(function () {
        $("#eight-image").on("change",function (event) {
            let image = $(this).closest(".eight-div").find(".eight-div-show");
            image.attr("src",URL.createObjectURL(event.target.files[0]));
        });
    });
    $(document).ready(function () {
        $("#nine-image").on("change",function (event) {
            let image = $(this).closest(".nine-div").find(".nine-div-show");
            image.attr("src",URL.createObjectURL(event.target.files[0]));
        });
    });
    $(document).ready(function () {
        $("#ten-image").on("change",function (event) {
            let image = $(this).closest(".ten-div").find(".ten-div-show");
            image.attr("src",URL.createObjectURL(event.target.files[0]));
        });
    });
</script>

@stack('script')
