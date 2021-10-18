<!DOCTYPE html>
<html>
<head>
    <title>Event Deleting (Monthly Event Calendar)</title>

    <!-- head -->
    <meta charset="utf-8"/>
    <meta name="referrer" content="no-referrer-when-downgrade" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="main.css?v=2021.4.5120" type="text/css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet"/>
    <script src="daypilot-all.min.js?v=2021.4.5120"></script>


    <!-- /head -->
</head>
<body>

    <!-- /top -->


    <div id="dp"></div>

    <script type="text/javascript">
        var dp = new DayPilot.Month("dp");

        // behavior and appearance
        dp.cellMarginBottom = 20;

        dp.bubble = new DayPilot.Bubble({
            cssClassPrefix: "bubble_default",
            onLoad: function (args) {
                var ev = args.source;
                args.html = "testing bubble for: " + ev.text();
            }
        });

        // view
        dp.startDate = "2021-01-01";  // or just dp.startDate = "2013-03-25";

        // generate and load events
        for (var i = 0; i < 10; i++) {
            var duration = Math.floor(Math.random() * 1.2);
            var start = Math.floor(Math.random() * 6) - 3; // -3 to 3

            var e = new DayPilot.Event({
                start: new DayPilot.Date("2021-01-01T00:00:00").addDays(start),
                end: new DayPilot.Date("2021-01-01T12:00:00").addDays(start).addDays(duration),
                id: DayPilot.guid(),
                text: "Event " + i
            });
            dp.events.add(e);
        }

        // event moving
        dp.onEventMoved = function (args) {
            dp.message("Moved: " + args.e.text());
        };

        // event resizing
        dp.onEventResized = function (args) {
            dp.message("Resized: " + args.e.text());
        };

        // event creating
        dp.onTimeRangeSelected = function (args) {
            var name = prompt("New event name:", "Event");
            dp.clearSelection();
            if (!name) return;
            var e = new DayPilot.Event({
                start: args.start,
                end: args.end,
                id: DayPilot.guid(),
                text: name
            });
            dp.events.add(e);
            dp.message("Created");
        };

        dp.eventDeleteHandling = "Update";

        dp.onEventDeleted = function (args) {
            dp.message("Event deleted: " + args.e.text());
        };

        dp.onHeaderClicked = function (args) {
            alert("day: " + args.header.dayOfWeek);
        };

        dp.onBeforeEventRender = function (args) {
            // disable deleting for events with "1" in the text
            if (args.data.text.indexOf("1") !== -1) {
                args.data.deleteDisabled = true;
            }
        };

        dp.init();


    </script>

    <!-- bottom -->
</template>

<script src="app.js?v=2021.4.5120"></script>
<!-- /bottom -->

</body>
</html>

