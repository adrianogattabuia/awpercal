<!-- Javascript include -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!-- <script src="<?= base_url(); ?>bootstrap/js/jquery-1.11.0.min.js"></script> -->
	<script src="<?= base_url(); ?>bootstrap/js/bootstrap.min.js"></script>

	<script>

	 $(function() { 

	 	// Initialization variables

		var base_url = 'http://localhost/portfolio2/main/';
	
	


		// jQuery form validation 
		

		var fieldA1 = $("input[name='valueA1']");
		var fieldA2 = $("input[name='valueA2']");

		fieldA1.blur(function() { validateFieldA1(fieldA1.val()); });
		fieldA2.blur(function() { validateFieldA2(fieldA2.val()); });

		
		function validateFieldA1(val) {
			
			var regexp = /^[0-9]+([\,\.][0-9]+)?$/g;
			var result = regexp.test(val);
			
			if (result == 1) {

				// Field ok
				fieldA1.toggleClass("fielderror", false);
				
			
			} else {

				fieldA1.toggleClass("fielderror", true);
			
				// Disable "Calculate button"

			}
		}


		function validateFieldA2(val) {
			
			var regexp = /^[0-9]+([\,\.][0-9]+)?$/g;
			var result = regexp.test(val);
			
			if (result == 1) {

				// Field ok
				fieldA2.toggleClass("fielderror", false);
				
			
			} else {

				fieldA2.toggleClass("fielderror", true);
				
				// Disable "Calculate button"

			}
		}


		 		
		

		var fieldB1 = $("input[name='valueB1']");
		var fieldB2 = $("input[name='valueB2']");

		fieldB1.blur(function() { validateFieldB1(fieldB1.val()); });
		fieldB2.blur(function() { validateFieldB2(fieldB2.val()); });

		
		function validateFieldB1(val) {
			
			var regexp = /^[0-9]+([\,\.][0-9]+)?$/g;
			var result = regexp.test(val);
			
			if (result == 1) {

				// Field ok
				fieldB1.toggleClass("fielderror", false);
				
			
			} else {

			fieldB1.toggleClass("fielderror", true);
			
			// Disable "Calculate button"

			}
		}


		function validateFieldB2(val) {
			
			var regexp = /^[0-9]+([\,\.][0-9]+)?$/g;
			var result = regexp.test(val);
			
			if (result == 1) {

				// Field ok
				fieldB2.toggleClass("fielderror", false);
				
			
			} else {

				fieldB2.toggleClass("fielderror", true);
				
				// Disable "Calculate button"

			}
		}
		


		
		




		// /jQuery validation

		

		// First row (A) calculation: What is n% of n?
		
		
		

		$("#formA").submit(function() { 

				perform_calcA(); 
				return false; 
		});

		

		function perform_calcA() {


			var A1 = $("input[name='valueA1']").val();
			var A2 = $("input[name='valueA2']").val();

			var postData = {
				
				'valueA1' : A1,
				'valueA2' : A2
			};

			
			$.ajax({
				
				type: "POST",
				url: base_url + "calcA",
				data: postData,
				success: function(response_result) {
					$("input[name='resultA']").attr("placeholder", response_result); 
				}



			});


			
		}


		// Seecond row (B) calculation: ns is what % of n?
				

		$("#formB").submit(function() { 

				perform_calcB(); 
				return false; 
		});

		

		function perform_calcB() {


			var B1 = $("input[name='valueB1']").val();
			var B2 = $("input[name='valueB2']").val();

			var postData = {
				
				'valueB1' : B1,
				'valueB2' : B2
			};

			
			$.ajax({
				
				type: "POST",
				url: base_url + "calcB",
				data: postData,
				success: function(response_result) {
					$("input[name='resultB']").attr("placeholder", response_result); 
				}



			});


			
		}
				

	 	
		// Populate table with data 	


		$("#formC").submit(function() { 

				saveitall();
				return false; 
		});


		function saveitall() {
	 	

			var A1 		= $("input[name='valueA1']").val();
			var A2 		= $("input[name='valueA2']").val();
			var resultA = $("input[name='resultA'").attr("placeholder");
		 	var B1 		= $("input[name='valueB1']").val();
			var B2 		= $("input[name='valueB2']").val();
		 	var resultB = $("input[name='resultB'").attr("placeholder");
		 	var resultC = $("input[name='resultC'").val();

		 	var formattedCalcA = '';
		 	var formattedCalcB = '';

	 		console.log("A1: " + A1 + " " + "\n" +
	 					"A2: " + A2 + " " + "\n" +
	 					"resultA: " + resultA + " " + "\n" +
	 					"B1: " + B1 + " " + "\n" +
	 					"B2: " + B2 + " " + "\n" +
	 					"resultB: " + resultB + " " + "\n" +
	 					"resultC: " + resultC + " " + "\n"

	 					);

	 		if (resultA === 'Not a number' || resultA === '' || resultA === 'Result') {

	 			resultA = 'n/a';	
	 			formattedCalcA = resultA;


	 		} else {

	 			formattedCalcA =  A1 + '% of ' + A2 + ' is ' + resultA;

	 		}

	 		if (resultB === 'Not a number' || resultB === '' || resultB === 'Result') {

	 			resultB = 'n/a';
	 			formattedCalcB = resultB;	

	 		} else {

	 			 formattedCalcB = B1 + ' is ' + resultB + '% ' + ' of ' + B2;


	 		}

	 		if (resultC === '') {

	 			resultC = '(No name given)';
	 		}



	 		$('table tbody tr:last').after('<tr>' +
	 			'<td data-title="Calculation name">' + resultC + '</td>' +
	 			'<td data-title="What is n% of m?">' + formattedCalcA + '</td>' +
        		'<td data-title="j is what % of k?">' + formattedCalcB + '</td>' +
        		'</tr>');


	 			

	 } // /Populate table with data
	 	

	 	

	 	

	 

	 } 

	 );
	 


	</script>
</body>
</html>