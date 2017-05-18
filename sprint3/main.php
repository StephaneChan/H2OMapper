<html>
    
	<head>
		<!-- Trial Webpage -->
		<style type="text/css">
                    input{
                    border:1px solid lightgray;
                    border-radius:5px;
                    }
                    h1{
                     color: #145252;
                     font-size:24px;
                     text-align:center;
                    }
                    h3{
                     color: darkcyan;
                     font-size:18px;
                     text-align:center;  
                    }
                    body{
                     padding-top: 5%;
                     background-color: aliceblue;
                    }
                    #yearOptions {
                     float: center;
                     text-align: center;
                     padding:2px;
                    }
                    #yearOptions {
                     align: center;
                     max-width: 480px;
                     margin: auto;
                    }
                    .button {
                        background-color: darkslategray;
                        border: none;
                        color: white;
                        padding: 15px 32px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 16px;
                        margin: 4px 2px;
                        cursor: pointer;
                    }
                </style>
	</head>
        
	<body>
	<div>
		<div id="yearSelect">
			<h1>H2O Mapper</h1>
				<h3>Select a Year</h3>
			<div id="yearOptions">
				<!-- Add years and links here -->
				<a href="./map2013.php" class="button">2013</a><br>	<!-- Single dot goes one directory back and goes back in the same directory-->
				<a href="./map2014.php" class="button">2014</a><br>
				<a href="./map2015.php" class="button">2015</a><br>
			</div>
                        
		</div>
	</div>
	</body>
       
</html>