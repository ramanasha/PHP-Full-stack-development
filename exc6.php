<html>
    <head>
        <link rel="stylesheet" href="form-emp.css">
    </head>
    <body>
        <form action = "test3.php" method = "post">
            <fieldset style ="width:400px;">
            <br/>
            <legend> Employee Details </legend>

            <!-- year -->
            <label for="year">Year &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                <select name = "year">
                    <option  id = "year" value="2015">2015</option>
                    <option  id = "year" value="2016">2016</option>
                    <option  id = "year" value="2017">2017</option>
                    <option  id = "year" value="2018">2018</option>
                    <option  id = "year" value="2019" selected>2019</option>
                    <option  id = "year" value="2020">2020</option>
                    <option  id = "year" value="2021">2021</option>
                    <option  id = "year" value="2022">2022</option>
                    <option  id = "year" value="2023">2023</option>
                    <option  id = "year" value="2024">2024</option>
                </select>
            </label>
            <br/>
            <br/>

            <!-- first name -->
            <label for="fname">First Name :
                <input type = "text" name = "fname" id = "fname" placeholder="Enter your first name"/>
            </label>
            <br/>
            <br/>

            <!-- month of salary -->
            <label for="month">Year &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                <select name = "month">
                    <option  id = "month" value="January">January</option>
                    <option  id = "month" value="February">February</option>
                    <option  id = "month" value="March">March</option>
                    <option  id = "month" value="April">April</option>
                    <option  id = "month" value="May">May</option>
                    <option  id = "month" value="June">June</option>
                    <option  id = "month" value="July">July</option>
                    <option  id = "month" value="August">August</option>
                    <option  id = "month" value="September">September</option>
                    <option  id = "month" value="October">October</option>
                    <option  id = "month" value="November">November</option>
                    <option  id = "month" value="December" selected>December</option>
                </select>
            </label>
            <br/>
            <br/>

            <!-- basic salary -->
            <label for="basicsal">Basic Salary :
                <input type = "number" name = "basicsal" id = "basicsal" placeholder="Enter your basic salary"/>
            </label>
            <br/>
            <br/>

            <!-- data of birth -->
            <label for="dob">Date of Birth :
                <input type = "date" name = "dob" id = "dob" placeholder="Enter your basic date of birth"/>
            </label>
            <br/>
            <br/>

            <!-- address -->
            <label for="address">Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                <textarea type = "text" name= "address" id = "address"></textarea></label>
            <br/>
            <br/>

            <!-- gender -->
            <label>Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
            <label><input type = "radio" name= "gender" id = "gender" value = "Male" checked/>Male</label>
            <label><input type = "radio" name= "gender" id = "gender" value = "Female"/>Female</label>
            <label><input type = "radio" name= "gender" id = "gender" value = "Other"/>Other</label>
            <br/>
            <br/>

            <!-- phone number -->
            <label for="phno">Phone No :
                <input type = "text" name= "phno" id = "phno"/>
            </label>
            <br/>
            <br/>

            <input type = "submit" value = "Submit"/>
            <input type = "reset" value = "clear"/>
        </fieldset>
        </form>
    </body>
</html>
