<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>

        /* Start - Speedometer 1 */
        #wrapper {
            position: relative;  
            margin: auto;            
        
        }
		#meter {
		    width: 100%; height: 90%;
		    transform: rotateX(180deg);
		}

		.circle {
            fill: none;
        }

		.outline, #mask {
		    stroke: #F1F1F1; 
		    stroke-width: 65;
		}

		.range { 
            stroke-width: 60; 
        }

		#slider, #lbl {
		    position: absolute;
		}

		#slider {		    
		    left: 0;
		    margin: auto;
		    right: 0;
		    top: 50%;
            border: solid;
            border-color: #55605A;
            text-align: center;
            font-size: 15pt;
		    font-weight: bold;
		    width: 20%;
		}

		#lbl {
		    background-color: #4B4C51; 
		    border-radius: 2px;
		    color: white;   
		    font-family: 'courier new';
		    font-size: 15pt;
		    font-weight: bold;
		    padding: 4px 4px 3px 4px;
		    right: 110px;
		    top: 50%;
		}

		#meter_needle {
		    height: 27%;
		    left: 0;
		    margin: auto;
		    position: absolute;
		    right: 0;
		    top: 17%;
		    transform-origin: bottom center;
		    transform: rotate(270deg);
		}
        /* End - Speedometer 1 */

        /* Start - Speedometer 2 */
        #wrapper_2 {
            position: relative;  
            margin: auto;
        
        }

        #meter_2 {
		    width: 100%; height: 90%;
		    transform: rotateX(180deg);
		}

        #mask_2 {
		    stroke: #F1F1F1; 
		    stroke-width: 65;
		}

        #slider_2, #lbl_2 {
		    position: absolute;
		}

        #slider_2 {		    
		    left: 0;
		    margin: auto;
		    right: 0;
		    top: 50%;
            border: solid;
            border-color: #55605A;
            text-align: center;
            font-size: 15pt;
		    font-weight: bold;
		    width: 20%;
		}

		#lbl_2 {
		    background-color: #4B4C51; 
		    border-radius: 2px;
		    color: white;   
		    font-family: 'courier new';
		    font-size: 15pt;
		    font-weight: bold;
		    padding: 4px 4px 3px 4px;
		    right: 110px;
		    top: 50%;
		}

		#meter_needle_2 {
		    height: 27%;
		    left: 0;
		    margin: auto;
		    position: absolute;
		    right: 0;
		    top: 17%;
		    transform-origin: bottom center;
		    transform: rotate(270deg);
		}
        /* End - Speedometer 2 */

        /* Start - Speedometer 3 */
        #wrapper_3 {
            position: relative;  
            margin: auto;
        
        }

        #meter_3 {
		    width: 100%; height: 90%;
		    transform: rotateX(180deg);
		}

        #mask_3 {
		    stroke: #F1F1F1; 
		    stroke-width: 65;
		}

        #slider_3, #lbl_3 {
		    position: absolute;
		}

        #slider_3 {		    
		    left: 0;
		    margin: auto;
		    right: 0;
		    top: 50%;
            border: solid;
            border-color: #55605A;
            text-align: center;
            font-size: 15pt;
		    font-weight: bold;
		    width: 20%;
		}

		#lbl_3 {
		    background-color: #4B4C51; 
		    border-radius: 2px;
		    color: white;   
		    font-family: 'courier new';
		    font-size: 15pt;
		    font-weight: bold;
		    padding: 4px 4px 3px 4px;
		    right: 110px;
		    top: 50%;
		}

		#meter_needle_3 {
		    height: 27%;
		    left: 0;
		    margin: auto;
		    position: absolute;
		    right: 0;
		    top: 17%;
		    transform-origin: bottom center;
		    transform: rotate(270deg);
		}
        /* End - Speedometer 3 */

                
        .card-baku {
            background-color: #A4EAF7;
            height: 210px;
        }

        .card-baku-2 {
            background-color: #CFBFAF;
            height: 210px;
        }

        .card-baku-3 {
            background-color: #D3CBC2;
            height: 210px;
        }

        .card-baku-4 {
            background-color: #A4DD63;            
        }

        .card-baku-5 {
            background-color: #00C026;    
            height: 55px;        
        }

        .card-baku-6 {
            background-color: #E6FF00;            
            height: 55px;        
        }
        
        .box-desc1 {
            background: #D90D0D;            
            width: 25px;
            height: 25px;
        }

        .box-desc2 {
            background: #E6FF00;            
            width: 25px;
            height: 25px;
        }

        .box-desc3 {
            background: #00C026;            
            width: 25px;
            height: 25px;
        }

        .img-logo {
            width: 100px;
            height: 100px;
        }

        .img-logo2 {
            width: 100px;
            height: 100px;
        }    

    </style>
  </head>
  <body>

  <div class="container">
    <div class="row mt-3">
        <div class="col-md-8">
            <h1>ENVIRONMENT</h1>
        </div>
        <div class="col-md-2">
            <img class="img-logo" src="download2.jpeg" alt="" srcset="">
        </div>
        <div class="col-md-2">
            <img class="img-logo2" src="download3.png" alt="" srcset="">
        </div>
    </div>


    <!-- First Row  -->
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card card-baku" style="width: 22rem;">
                <div class="card-body">
                    <h5 class="card-title">Baku Mutu Air</h5>
                    <p class="card-text">
                    <div class="row">
                        <div class="col-md-8">
                            Coliform                           
                        </div>
                        <div class="col-md-4 text-end">
                            18.900
                        </div>
                    </div>
                    </p>                
                </div>
            </div>
        </div>

        <!-- Speedometer -->
        <div class="col-md-4">
            <div id="wrapper">
                <svg id="meter">
                    <circle id="outline_curves" class="circle outline"  cx="50%" cy="50%">
                    </circle>
                    <circle id="low" class="circle range" cx="50%" cy="50%" stroke="#D90D0D">
                    </circle>
                    <circle id="avg" class="circle range" cx="50%" cy="50%" stroke="#E6FF00">
                    </circle>
                    <circle id="high" class="circle range" cx="50%" cy="50%" stroke="#00C026">
                    </circle>                 
                </svg>
                <img id="meter_needle" src="svg-meter-gauge-needle.svg" alt="">
                <input id="slider" type="text" value="80" disabled/> 
                <label id="lbl" id="value" for="">%</label>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Description</h5>
                    <p class="card-text">
                    <div class="row mb-1">
                        <div class="col-md-2">
                            <div class="box-desc1"></div>
                        </div>
                        <div class="col-md-10">
                            <span>&#8805;</span> 4 Parameter ( 1% - 85% )
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-md-2">
                            <div class="box-desc2"></div>
                        </div>
                        <div class="col-md-10">
                            1-3 Parameter ( 86% - 99% )
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="box-desc3"></div>
                        </div>
                        <div class="col-md-10">
                            0 Parameter ( 100% )
                        </div>
                    </div>                    
                    </p>                
                </div>
            </div>
        </div>
    </div>

    <!-- Second Row -->
    <div class="row">
        <div class="col-md-4">
            <div class="card card-baku-2" style="width: 22rem;">
                <div class="card-body">
                    <h5 class="card-title">Emisi Sumber Tidak Bergerak</h5>
                    <p class="card-text">
                    <div class="row">
                        <div class="col-md-8">
                            Carbon Dioxide (CO2)                           
                        </div>
                        <div class="col-md-4 text-end">
                            7,7%
                        </div>
                    </div>
                    </p>                
                </div>
            </div>
        </div>

        <!-- Speedometer 2 -->
        <div class="col-md-4">
            <div id="wrapper_2">
                <svg id="meter_2">
                    <circle id="outline_curves_2" class="circle outline"  cx="50%" cy="50%">
                    </circle>
                    <circle id="low_2" class="circle range" cx="50%" cy="50%" stroke="#D90D0D">
                    </circle>
                    <circle id="avg_2" class="circle range" cx="50%" cy="50%" stroke="#E6FF00">
                    </circle>
                    <circle id="high_2" class="circle range" cx="50%" cy="50%" stroke="#00C026">
                    </circle>                 
                </svg>
                <img id="meter_needle_2" src="svg-meter-gauge-needle.svg" alt="">
                <input id="slider_2" type="text" value="100" disabled/> 
                <label id="lbl_2" id="value" for="">%</label>
            </div>
        </div>      

    </div>

    <!-- Third Row -->    
    <div class="row">
        <div class="col-md-4">
            <div class="card card-baku-3" style="width: 22rem;">
                <div class="card-body">
                    <h5 class="card-title">Udara Ambient</h5>
                    <p class="card-text">
                    <div class="row">
                        <div class="col-md-8">
                            Partikulat (TSP) Downwind                   
                        </div>
                        <div class="col-md-4 text-end">
                            60,21 µq/m<span>&#179;</span>
                        </div>
                    </div>
                    </p>                
                </div>
            </div>
        </div>

        <!-- Speedometer 3 -->
        <div class="col-md-4">
            <div id="wrapper_3">
                <svg id="meter_3">
                    <circle id="outline_curves_3" class="circle outline"  cx="50%" cy="50%">
                    </circle>
                    <circle id="low_3" class="circle range" cx="50%" cy="50%" stroke="#D90D0D">
                    </circle>
                    <circle id="avg_3" class="circle range" cx="50%" cy="50%" stroke="#E6FF00">
                    </circle>
                    <circle id="high_3" class="circle range" cx="50%" cy="50%" stroke="#00C026">
                    </circle>                 
                </svg>
                <img id="meter_needle_3" src="svg-meter-gauge-needle.svg" alt="">
                <input id="slider_3" type="text" value="90" disabled/> 
                <label id="lbl_3" id="value" for="">%</label>
            </div>
        </div>

    </div>

    <!-- Fourth Row -->
    <div class="row">
        <div class="col-md-4">
            <div class="card card-baku-4" style="width: 22rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">ENVIRONMENT INCIDENT</h5>                                     
                </div>
            </div>
        </div>
        <div class="col-md-6 ps-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="fw-bold">
                        NO INCIDENT
                    </div> 
                </div>
                <div class="col-md-4">
                    <div class="card card-baku-5 text-center" style="width: 5rem;">
                        <div class="card-body">
                            <h5 class="card-title">1</h5>                                     
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2 mb-5">
                <div class="col-md-4">
                    <div class="fw-bold">
                        IMPACT
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-baku-6 text-center" style="width: 5rem;">
                        <div class="card-body">
                            <h5 class="card-title">M</h5>                                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   </div>    

   <!-- Script -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- First Speedometer -->
    <script>
        /* set radius for all circles */
        var r = 120;
        var circles = document.querySelectorAll('.circle');
        var total_circles = circles.length;
        for (var i = 0; i < total_circles; i++) {
            circles[i].setAttribute('r', r);
        }
        /* set meter's wrapper dimension */
        var meter_dimension = (r * 2) + 100;        
        var wrapper = document.querySelector('#wrapper');
        wrapper.style.width = meter_dimension + 'px';
        wrapper.style.height = meter_dimension + 'px';		

        /* add strokes to circles  */

        var cf = 2 * Math.PI * r;
        var semi_cf = cf / 2;
        var semi_cf_1by3 = semi_cf / 13;
        var semi_cf_2by3 = semi_cf_1by3 * 2;
        document.querySelector('#outline_curves')
            .setAttribute('stroke-dasharray', semi_cf + ',' + cf);
        document.querySelector('#low')
            .setAttribute('stroke-dasharray', semi_cf + ',' + cf);
        document.querySelector('#avg')
            .setAttribute('stroke-dasharray', semi_cf_2by3 + ',' + cf);
        document.querySelector('#high')
            .setAttribute('stroke-dasharray', 6 + ',' + cf);		
        var slider = document.querySelector('#slider');		
        var mask = document.querySelector('#mask');
        var meter_needle =  document.querySelector('#meter_needle');
        function range_change_event() {
            var percent = slider.value;
            var meter_value = (semi_cf - ((percent * semi_cf) / 100));            		    
            meter_needle.style.transform = 'rotate(' + (270 + ((percent * 180) / 100)) + 'deg)';		    
        }
        
        var event = new Event(range_change_event());
        slider.dispatchEvent(event);

        slider.addEventListener('input', range_change_event);
        
    </script>

    <!-- Second Speedometer -->
    <script>
        /* set radius for all circles */
        var r = 120;
        var circles = document.querySelectorAll('.circle');
        var total_circles = circles.length;
        for (var i = 0; i < total_circles; i++) {
            circles[i].setAttribute('r', r);
        }
        /* set meter's wrapper dimension */
        var meter_dimension = (r * 2) + 100;
        var wrapper = document.querySelector('#wrapper_2');
        wrapper.style.width = meter_dimension + 'px';
        wrapper.style.height = meter_dimension + 'px';
        /* add strokes to circles  */

        var cf = 2 * Math.PI * r;
        var semi_cf = cf / 2;
        var semi_cf_1by3 = semi_cf / 13;
        var semi_cf_2by3 = semi_cf_1by3 * 2;
        document.querySelector('#outline_curves_2')
            .setAttribute('stroke-dasharray', semi_cf + ',' + cf);
        document.querySelector('#low_2')
            .setAttribute('stroke-dasharray', semi_cf + ',' + cf);
        document.querySelector('#avg_2')
            .setAttribute('stroke-dasharray', semi_cf_2by3 + ',' + cf);
        document.querySelector('#high_2')
            .setAttribute('stroke-dasharray', 6 + ',' + cf);		
        var slider = document.querySelector('#slider_2');		
        var mask = document.querySelector('#mask_2');
        var meter_needle =  document.querySelector('#meter_needle_2');
        function range_change_event_2() {
            var percent = slider.value;
            var meter_value = (semi_cf - ((percent * semi_cf) / 100));            		    
            meter_needle.style.transform = 'rotate(' + (270 + ((percent * 180) / 100)) + 'deg)';		    
        }
        
        var event = new Event(range_change_event_2());
        slider.dispatchEvent(event);

        slider.addEventListener('input', range_change_event_2);
        
    </script>

    <!-- Third Speedometer -->
    <script>
        /* set radius for all circles */
        var r = 120;
        var circles = document.querySelectorAll('.circle');
        var total_circles = circles.length;
        for (var i = 0; i < total_circles; i++) {
            circles[i].setAttribute('r', r);
        }
        /* set meter's wrapper dimension */
        var meter_dimension = (r * 2) + 100;
        var wrapper = document.querySelector('#wrapper_3');
        wrapper.style.width = meter_dimension + 'px';
        wrapper.style.height = meter_dimension + 'px';
        /* add strokes to circles  */

        var cf = 2 * Math.PI * r;
        var semi_cf = cf / 2;
        var semi_cf_1by3 = semi_cf / 13;
        var semi_cf_2by3 = semi_cf_1by3 * 2;
        document.querySelector('#outline_curves_3')
            .setAttribute('stroke-dasharray', semi_cf + ',' + cf);
        document.querySelector('#low_3')
            .setAttribute('stroke-dasharray', semi_cf + ',' + cf);
        document.querySelector('#avg_3')
            .setAttribute('stroke-dasharray', semi_cf_2by3 + ',' + cf);
        document.querySelector('#high_3')
            .setAttribute('stroke-dasharray', 6 + ',' + cf);		
        var slider = document.querySelector('#slider_3');		
        var mask = document.querySelector('#mask_3');
        var meter_needle =  document.querySelector('#meter_needle_3');
        function range_change_event_3() {
            var percent = slider.value;
            var meter_value = (semi_cf - ((percent * semi_cf) / 100));            		    
            meter_needle.style.transform = 'rotate(' + (270 + ((percent * 180) / 100)) + 'deg)';		    
        }
        
        var event = new Event(range_change_event_3());
        slider.dispatchEvent(event);

        slider.addEventListener('input', range_change_event_3);
        
    </script>
    
  </body>
</html>