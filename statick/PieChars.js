   google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Речной сток', 40],
          ['Перевозка морем', 20],
          ['Естественные излияния нефти со дна океана', 15],
          ['Сточные воды', 12],
          ['Добыча нефти на море', 5],
          ['Выпадения с атмосферными осадками', 4],
          ['Сток с городских районов', 3],
          ['нефти перегонные заводы на суше', 1]

        ]);

        // Set chart options
        var options = {'title':'Химическии загрязнения Мирового океана',
                       'width':800,
                       'height':400};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_divP'));
        chart.draw(data, options);
      }