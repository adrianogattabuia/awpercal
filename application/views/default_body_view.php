<link href='http://fonts.googleapis.com/css?family=Josefin+Sans|Lobster' rel='stylesheet' type='text/css'>
<style>

.top-buffer { margin-top: 20px; }
.fielderror { border-color: red; }
h1 { font-family: 'Lobster', cursive;}
body { font-family: 'Josefin Sans', sans-serif;}
.stylebtnxs { width: 100%; margin-top: 10px; margin-bottom: 10px; border: 1px dotted black;  }

</style>

<body class="container">
	
	<div class="row">
		<h1 class="col-lg-10 hidden-xs">Awesome % Calc!</h1>
		<h1 class="col-lg-12 visible-xs">A%C!</h1>
				
   
	</div>



<div class="row top-buffer">
         
		 <form id="formA" method="post"> 
			
			<div class="form-group">	
				<div class="col-lg-1">What is</div> 
				<div class="col-lg-2"><input type="text" class="form-control" name="valueA1"></div>
				<div class="col-lg-1">% of</div>
				<div class="col-lg-2"><input type="text" class="form-control" name="valueA2"></div>
				<div class="col-lg-1">?</div>
				
                <div class="col-lg-1 hidden-xs"><button type="submit" id="calcAbtn" class="btn btn-default">Calculate</button></div>
				
                <div class="row col-lg-1">
                    <div class="visible-xs col-xs-12"><button type="submit" id="calcAbtn" class="btn-lg btn-default stylebtnxs">Calculate</button>
                    </div>
                </div>
                
                <div class="col-lg-4"><input type="text" class="form-control" placeholder="Result" name="resultA"></input></div>

			</div>
		

        </form>





</div>

<div class="row top-buffer">
	
	<form id="formB" method="post">	
		<div class="form-group" >	
			<div class="col-lg-3"><input type="text" class="form-control" name="valueB1"></div>
			<div class="col-lg-1">is what % of</div>
			<div class="col-lg-2"><input type="text" class="form-control" name="valueB2"></div>
			<div class="col-lg-1">?</div>
			
            <div class="col-lg-1 hidden-xs"><button type="submit" id="calcBbtn" class="btn btn-default">Calculate</button></div>
			
            <div class="row col-lg-1">
                <div class="visible-xs col-xs-12"><button type="submit" id="calcBbtn" class="btn-lg btn-default stylebtnxs">Calculate</button>   
                </div>

            </div>

            <div class="col-lg-4"><input type="text" class="form-control" placeholder="Result" name="resultB"></input></div>
		
        </div>
	
    </form>

</div>	


<div class="row top-buffer">
	
		<form id="formC">
		
				<div class="form-group">
					
					<div class="col-lg-3">Name this calculation (70 chars max):</div>
					<div class="col-lg-3"><input type="text" class="form-control" name="resultC" maxlength="70"></div>
					<div class="col-lg-1 hidden-xs"><button type="submit" id="savebtn" class="btn btn-default">Save</button></div>

                    <div class="row col-lg-1">
                        <div class="visible-xs col-xs-12"><button type="submit" id="savebtn" class="btn-lg btn-default stylebtnxs">Save</button></div>
                    </div>
						
					</div>
				
				</div>
		
		</form>
			
			

</div>


<!-- no more tables -->


<div class="row top-buffer">
        <div class="col-md-12">
           
        </div>
      

        <div id="no-more-tables">
            <table class="col-md-12 table-bordered table-striped table-condensed cf">
        		<thead class="cf">
        			<tr>
        				<th>Calculation name</th>
        				<th>CalcA</th>
        				<th>CalcB</th>
        				
        				
        				
        			</tr>
        		</thead>
        		<tbody>
        			

                    <tr>
        			
                    	<td data-title="Calculation name"><i>The name of your calculation will be shown in this column</i></td>
        				<td data-title="CalcA"><i>What is n% of m?</i></td>
        				<td data-title="CalcB"><i>j is what % of k?</i></td>
        				
        				
        			</tr>
        			
        			
        		</tbody>
        	</table>
        </div>
    </div>
    

    <!-- /no more tables -->
    <div class="row">&nbsp;
    </div>
    <div class="row">
        <p class="text-center"><i><a href="https://careers.stackoverflow.com/users/info/518293">Hire me!</a></i></p>
    </div>
    <footer>
    	<p class="text-center">Adriano Gattabuia &copy; 2015</p>
    </footer>




