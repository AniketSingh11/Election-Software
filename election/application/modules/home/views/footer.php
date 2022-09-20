<footer class="site-footer">
    <div class="text-center">
        20<?php echo date('y'); ?>.
        <a href="<?php echo current_full_url() . '#'; ?>" class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="common/js/jquery.js"></script>
<script src="common/js/jquery-1.8.3.min.js"></script>
<script src="common/js/bootstrap.min.js"></script>
<script src="common/js/jquery.scrollTo.min.js"></script>
<script src="common/js/jquery.nicescroll.js" type="text/javascript"></script>
<script type="text/javascript" src="common/assets/DataTables/datatables.min.js"></script>
<script src="common/js/respond.min.js" ></script>
<script type="text/javascript" src="common/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="common/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>


<script type="text/javascript" src="common/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="common/js/advanced-form-components.js"></script>

<script type="text/javascript" src="common/assets/ckeditor/ckeditor.js"></script>

<script src="common/js/jquery.cookie.js"></script>

<!--common script for all pages--> 
<script src="common/js/common-scripts.js"></script>
<script class="include" type="text/javascript" src="common/js/jquery.dcjqaccordion.2.7.js"></script>

<!--script for this page only-->
<script src="common/js/editable-table.js"></script>

<script src="common/assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>

<!-- END JAVASCRIPTS -->



<script type="text/javascript">

    $(document).ready(function () {
        $('#calendar').fullCalendar({
            lang: 'es',
            events: 'event/getEventByJason',
            header:
                    {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay',
                    },
            timeFormat: {// for event elements
                'month': 'h:mm TT A {h:mm TT}', // default
                'week': 'h:mm TT A {h:mm TT}', // default
                'day': 'h:mm TT A {h:mm TT}'  // default
            },
            eventRender: function (event, element) {
                element.find('.fc-event-time').html(element.find('.fc-event-time').text());
                element.find('.fc-event-title').html(element.find('.fc-event-title').text());

            },
            slotMinutes: 5,
            businessHours: false,
            slotEventOverlap: false,
            editable: true,
            selectable: true,
            lazyFetching: true,
            minTime: "00:00:00",
            maxTime: "24:00:00",
            defaultView: 'month',
            allDayDefault: false,

        });
    });

</script>





<script>


    $(document).ready(function () {
        $('#editable-sample').DataTable({
           //  responsive: true,
            dom: 'lfrBtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5',
                'print'
                
            ],
            
           
        });
    });

</script>



</body>
</html>

<script type="text/javascript" src="common/assets/jquery-multi-select/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="common/assets/jquery-multi-select/js/jquery.quicksearch.js"></script>

