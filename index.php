<html>

<head>
    <meta charset='utf-8' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <style>
        body {
            margin: 40px 10px;
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
        }

        #calendar {
            max-width: 1100px;
            margin: 0 auto;
        }
        .fc-scroller {
            overflow-y: hidden !important;
        }
    </style>
</head>

<body>

    <div id='calendar'></div>

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="tr.global.js"></script>
    <script src="tr.global.min.js"></script>

    <script type="text/javascript">

        function getEvent() {

            var events = new Array();

            $.ajax({
                type: "POST",
                url: "function.php?type=list", //AJAX isteğinin gönderileceği URL'yi belirtir.
                dataType: "json",
                //Sunucudan gelen veriler, JSON formatında döndürülüyor ve başarılı bir şekilde alındığında, success fonksiyonu çalışıyor. Bu success fonksiyonu, gelen verileri işleyerek bir diziye (events) ekliyor.
                success: function (data) {

                    var result = data;
                    //result adlı bir diziyi ele alır ve her bir öğe için bir döngü başlatır. Bu döngü, $.each() fonksiyonu kullanılarak gerçekleştirilir. $.each() fonksiyonu, bir dizi veya nesne üzerinde döngü yapmak için kullanılır ve her bir öğe için belirtilen bir işlevi çağırır.İçinde bulunan işlev, her bir dizi öğesini temsil eden item adında bir parametre alır. Bu durumda, her dizi öğesi, result dizisindeki bir etkinliği temsil eder.
                    //Özetle, bu kod bloğu, result dizisindeki her bir etkinlik öğesini alır, bu öğelerin özelliklerini kullanarak yeni bir etkinlik nesnesi oluşturur ve bu nesneleri events dizisine ekler. Bu şekilde, events dizisi, FullCalendar kütüphanesinin kullanabileceği etkinliklerin listesini içerir.

                    $.each(result, function (i, item) {
                        events.push({
                            event_id: result[i].id,
                            title: result[i].event_name,
                            start: result[i].start_date,
                            end: result[i].end_date,
                            color: result[i].color,
                            link: result[i].link,
                        });
                    });
                    
                            
                    var calendarEl = document.getElementById('calendar');

                    // FullCalendar kütüphanesini çalıştırıp özelliklerini tanımlıyoruz.

                    var calendar = new FullCalendar.Calendar(calendarEl, {

                        locale: 'tr',
                        headerToolbar: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                        },
                        initialDate: '<?= date('Y-m-d') ?>',
                        navLinks: true,
                        businessHours: true,
                        editable: true,
                        selectable: true,
                        events: events,
                        eventClick: function (info) {
                            if (info.event.extendedProps.link) {
                                window.location.href = info.event.extendedProps.link; // window.open(info.event.extendedProps.link); YENİ PENCEREDE AÇAR
                            }
                        }

                    });

                    calendar.render();


                }
            });
        }

        getEvent()
    </script>

</body>

</html>