

<!DOCTYPE html>
<html>
<head>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style type="text/css">

body {
    font-family: 'Roboto', sans-serif;
}

.triangle {
    position: relative;    
    height: 1200px;
    clip-path: polygon(50% 0%, 5% 100%, 95% 100%);    
    margin-top: 50px;
}

.triangle div {
    background: #4dee97;
    width: 100%;
    height: 220px;
    margin: 0 auto 10px;
    color: black;    
    /* line-height: 240px; */
    line-height: 130px;
    text-align: center;
    font-size: 1.1em;
}

.triangle .first {
    background: #4dee97;
}

.triangle .second {
    background: #4dee97;
}

.triangle .third {
    background: #4dee97;
}

.triangle .fourth {
    background: #4dee97;
}

.triangle .fifth {
    background: #4dee97;        
}

center {  
  margin-top: 30px;
  margin-bottom: 30px;
}

.triangle .fifth .container {
    display: flex;
    border-style:solid;
    border: red;
    flex-wrap: nowrap;
    justify-content: center;
}

.triangle .fifth .container .box1 {    
    background: #CCE2F2;    
    width: 200px;
    margin: 0 5px 0 0;
    line-height: 30px;
    text-align: justify;
    font-size: 0.75em;
}

.triangle .fifth .container .box2 {    
    background: #E2D1EB;    
    width: 200px;
    margin: 0 5px 0 0;
    line-height: 30px;
    text-align: justify;
    font-size: 0.75em;    
}

.triangle .fifth .container .box3 {    
    background: #F3D2D2;
    width: 330px;
    margin: 0 5px 0 0;    
    line-height: 30px;
    text-align: justify;
    font-size: 0.75em;     
}

.input-triangle {
    width:57px;
    border:2px solid #aaa;
    border-radius:4px;
    margin:0;
    outline:none;
    padding:2px;
    box-sizing:border-box;
    transition:.3s;
  }
  
.img-logo1 {    
    position: absolute; 
    visibility: visible; 
    left: 60px; 
    top: 50px; 
    z-index: 200; 
    width: 200px;
    height: 200px;
}

.img-logo2 {    
    position: absolute; 
    visibility: visible; 
    right: 60px; 
    top: 50px; 
    z-index: 200; 
    width: 200px;
    height: 200px;
}

</style>

</head>
<body>
    <?php 
    $datalost = 0;
    $datamedtret = 0;
    ?>        
        
        <img src="download2.jpeg" class="img-logo1" alt="logo" srcset="">                     
        <img src="download.jpeg" class="img-logo2" alt="logo" srcset="">                     
        
        <div class="triangle">
            <div class="first">    
                <b>1</b>
                <br>
                LOST TIME INJURY                                                                 
            </div>                                                                                      
            <div class="second">           
                <b>2</b>         
                <br> 
                MEDICAL TREATMENT INJURY
            </div>
            <div class="third">
                <b>3</b>            
                <br>            
                WORK INJURY
            </div>
            <div class="fourth">
                <b>4</b>
                <br>
                NEARMISS POTENSIAL (LTI)
            </div>
            <div class="fifth">
                <div class="container">
                    <div class="box1">
                        <table>
                            <tr>
                                <th>Safety Report </th>
                                <th width='34%'> </th>
                            </tr>                      
                            <tr>
                                <th>Report</th>
                                <th>: <input type="text" class="input-triangle" value="300000" disabled></th>
                            </tr>
                            <tr>
                                <th>Number Of People</th>
                                <th>: <input type="text" class="input-triangle" value="30" disabled></th>
                            </tr>
                            <tr>
                                <th>Potensial LTI</th> 
                                <th>: <input type="text" class="input-triangle" value="30" disabled></th>
                            </tr>
                        </table>
                    
                    </div>
                    <div class="box2">
                        <table>
                            <tr>
                                <th>Safety Audit </th>
                                <th width='34%'> </th>
                            </tr>                      
                            <tr>
                                <th>Report</th>
                                <th>: <input type="text" class="input-triangle" value="30" disabled></th>
                            </tr>
                            <tr>
                                <th>Number Of People</th>
                                <th>: <input type="text" class="input-triangle" value="30" disabled></th>
                            </tr>
                            <tr>
                                <th>Potensial LTI</th> 
                                <th>: <input type="text" class="input-triangle" value="30" disabled></th>
                            </tr>
                        </table>                  
                    </div>
                    <div class="box3">
                        <table>                                       
                            <tr>
                                <th> Unsafe Action</th>
                                <th>: <input type="text" class="input-triangle" value="30" disabled></th>
                                <th width='34%'><canvas id="myChart" width="106" height="106"></canvas></th>
                            </tr>
                            <tr>
                                <th>Unsafe Condition</th>
                                <th>: <input type="text" class="input-triangle" value="30" disabled></th>
                                <th width='34%'><canvas id="myChart2" width="106" height="106"></canvas></th>
                            </tr>                       
                        </table>  
                    </div>
                </div>
            </div>
        </div>    

        <div class="row justify-content-end mb-1">
            <div class="col-sm-4">
                Site Man Hours
            </div>
            <div class="col-sm-5">
                Zero LTI Man Hours
            </div>
        </div>
        <div class="row justify-content-end mb-4">            
            <div class="col-sm-4">
                <input type="text" class="btn btn-danger" value="1176987" disabled>        
            </div>
            <div class="col-sm-5">
                <input type="text" class="btn btn-primary" value="2500000" disabled>
            </div>
        </div>                

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

<script>
Chart.register(ChartDataLabels);
Chart.defaults.set('plugins.datalabels', {
  color: '#F8F6F4'
});
    
const ctx = document.getElementById('myChart').getContext('2d');


const myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {        
        datasets: [{
            label: 'My First Dataset',
            data: [50, 100],
            backgroundColor: [
                    'rgb(0,179,30)',
                    'rgb(0,38,230)',                    
                ],
            hoverOffset: 2
            }]
    },    
    options: {                
        responsive: false,
        maintainAspectRatio: true,         
        plugins: {
            dataLabels: {
                formatters: function(value) {
                    return value;
                }
            }
        },
        
    }    
});
</script>

<script>
const ctx2 = document.getElementById('myChart2').getContext('2d');
const myChart2 = new Chart(ctx2, {
    type: 'doughnut',
    data: {        
        datasets: [{
            label: 'My First Dataset',
            data: [50, 100],
            backgroundColor: [
                    'rgb(0,179,30)',
                    'rgb(0,38,230)',                    
                ],
            hoverOffset: 2
            }]
    },
    options: {    
        responsive: false,
        maintainAspectRatio: true,
        plugins: {
            dataLabels: {
                formatters: function(value) {
                    return value;
                }
            }
        }            
    }    
});
</script>

</body>
</html>