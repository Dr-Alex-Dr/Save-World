  google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Страна');
        data.addColumn('number', 'Откл. темп. ');
        data.addRows([
          ['1900', -0.2],
          ['1920', -0.3],
          ['1940', 0.1],
          ['1960', 0.02],
          ['1980', 0.2],
          ['2000', 0.5],
          ['2020', 0.9]
        ]);

        // Set chart options
        var options = {'title':'Глобальный индекс температуры суши и океанов',
                       'width':700,
                       'height':400};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('chart_divC'));
        chart.draw(data, options);
      }