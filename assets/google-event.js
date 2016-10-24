$(function() {
    function loadJSON(callback) {
        var xobj = new XMLHttpRequest();
            xobj.overrideMimeType('application/json');
        xobj.open('GET', location.origin + '/plugins/indikator/tracking/assets/google-event.txt', true);
        xobj.onreadystatechange = function() {
            if (xobj.readyState == 4 && xobj.status == '200') {
                callback(xobj.responseText);
            }
        };
        xobj.send(null);
    }
    loadJSON(function(response) {
        var json = JSON.parse(response);
        for (var i in json) {
            link = $('a[data-google-event-name="' + json[i]['name'] + '"], button[data-google-event-name="' + json[i]['name'] + '"]');
            if (link.length == 1) {
                // Category
                if (json[i]['auto_category'] == 1) {
                    json[i]['category'] = document.title;
                }

                // Action
                action = link.attr('data-google-event-action');
                if (action != '') {
                    json[i]['action'] = action;
                }

                // Label
                if (json[i]['auto_label'] == 1) {
                    json[i]['label'] = link.attr('href');
                }

                // Value
                if (json[i]['value'] != '') {
                    json[i]['value'] = ", '" + json[i]['value'] + "'";
                }

                // Onclick
                link.attr('onclick', "ga('send', 'event', '" + json[i]['category'] + "', '" + json[i]['action'] + "', '" + json[i]['label'] + "'" + json[i]['value'] + ")");
            }
        }
    });
});
