<!-- Datetimepicker JaveScript-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script>
    $(function () {
        $('input[name="created_at"]').daterangepicker({
            maxDate: moment().subtract(1, 'days'),
            locale: {
                format: 'YYYY-MM-DD',
                cancelLabel: 'Clear'
            },
            "opens": "right",
            autoUpdateInput: false
        });

        $('input[name="created_at"]').on('apply.daterangepicker', function (ev, picker) {
            let startDate = picker.startDate.format('YYYY-MM-DD');
            let endDate = picker.endDate.format('YYYY-MM-DD');
            let created_at_rang = startDate + '|' + endDate;
            let created_at_format = startDate + ' - ' + endDate;

            $(this).val(created_at_format);

            let diff = (new Date(endDate)) - (new Date(startDate));
            let days = (diff / 1000 / 60 / 60 / 24) + 1;
            if (days > 31) {
                $('#exportOrderTransaction').css('pointer-events', 'none');
                // $('#spanTooltip').tooltip('hide')
                //     .attr('data-original-title', 'Maximum export range is 31 days.')
                //     .tooltip('show');
                $('#exportOrderTransaction').attr('disabled', true);
            } else {
                // $('#spanTooltip').tooltip('hide')
                //     .attr('data-original-title', 'Ready to export.')
                //     .tooltip('show');
                $('#exportOrderTransaction').removeAttr('style');
                $('#exportOrderTransaction').attr('disabled', false);
            }
        });

        $('input[name="created_at"]').on('cancel.daterangepicker', function (ev, picker) {
            $(this).val('');
            $('#exportOrderTransaction').css('pointer-events', 'none');
            $('#spanTooltip').tooltip('hide')
                .attr('data-original-title', 'You must to select order date for enabling the export feature.')
                .tooltip('show');
            $('#exportOrderTransaction').attr('disabled', true);
        });
    });
</script>
