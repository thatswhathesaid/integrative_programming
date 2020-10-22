<!DOCTYPE html>
<html>
<body>	
	<form>
		<br>
		    <h1>Calculator</h1>
            <label>Input the First Number</label>
            <div></div>
            <br>
		    <input type="text" name="num1" placeholder="Enter a number">
            <div></div>
            <br>

            <label>Input the First Second</label>
            <div></div>
            <br>
            <input type="text" name="num2" placeholder="Enter a number">
            <div></div>
            <br>

            <button type="+" name="+" value="+"> + </button>
            <button type="-" name="-" value="-"> - </button>
            <button type="*" name="*" value="*"> * </button>
            <button type="/" name="/" value="+"> / </button>
            
        <br>
	</form>
    
    <?php
        if(isset($_GET["+"]))
        {
            $this1 = $_GET['num1'];
            $this2 = $_GET['num2'];
            echo $this1+$this2;
        }

        else if(isset($_GET["-"]))
        {
            $this1 = $_GET['num1'];
            $this2 = $_GET['num2'];
            echo $this1-$this2;
        }

        else if(isset($_GET["*"]))
        {
            $this1 = $_GET['num1'];
            $this2 = $_GET['num2'];
            echo $this1*$this2;
        }

        else if(isset($_GET["/"]))
        {
            $this1 = $_GET['num1'];
            $this2 = $_GET['num2'];
            echo $this1/$this2;
        }

    
    ?>
    

</body>
</html>