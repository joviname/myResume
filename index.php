<!doctype html> 
<html lang=en>
    <head>
        <title>Simple Resume</title>
        <link rel="stylesheet" href="css/css.css">

        <script src="jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    

    </head>
    <body>
        <div id="resumecontainer">
            <img src="1.jpg" alt="Picture" style=width:200px;height:200px;float:right;margin-top:-10px;margin-bottom:20px><br>

                <p>Joviname S. Maloloy-on</p>
                <p>09273505691</p>
                <p>joviname.maloloyon@evsu.edu.ph</p>
                <p>Block 5, Holywings Brgy. Tambulilid</p>
                <p>Ormoc City</p>
                <p>6541</p>
        
<hr size="5" width="100%" color="black">

            <section> 
                <h2>Personal Information</h2> 
                    <p>Age: 21</p>
                    <p>Birthdate: June 2, 2000</p>
                    <P>Birthplace: Ormoc City</p>
                    <p>Nationality: Filipino</p>
                    <p>Mother's Name: Rebecca S. Maloloy-on</p>
                    <p>Father's Name: Gaudioso C. Maloloy-on, Jr.</p>
            </section>

<hr size="4" width="100%" color="black">

            <section>
                <h2>Educational Background</h2>
                    <p>Tertiary Education</p>
                    <center><b>Eastern Visayas State University Ormoc Campus</b><br>
                    Barangay. Don Felipe Larrazabal, Ormoc City<br>
                    [4th year student]</center>
                
                    <p>Secondary Education</p>
                    <center><b>ACLC College of Ormoc</b><br>
                    Lilia Avenue, Barangay. Cogon, Ormoc City<br>
                    [Year graduated: 2018]</center>
                    <br><br>
                    <center><b>New Ormoc City National High School</b><br>
                    Barangay. Don Felipe Larrazabal Street, Ormoc City<br>
                    [Year graduated: 2016]</center>

                    <p>Primary Education</p>
                    <center><b>Tambulilid Elementary School</b><br>
                    Barangay. Tambulilid, Ormoc City<br>
                    [Year graduated: 2012]</center>       
            </section> 

<hr size="4" width="100%" color="black">

            <section>
                <h2>Skills</h2>
                    <p><li>Troubleshooting Computer</p>
                    <p><li>Proficient in Microsoft Office Including Excel and Power-point</p>
                    <P><li>Photo and Video Editing</p>
            </section>

<hr size="4" width="100%" color="black">

            <section>
                <div class="down">
                <a href="#"><h2>For more information</h2></a><br>
                <br>
                <button id="hide">CLICK TO HIDE</button>
                <button id="show">CLICK TO SHOW</button>
                <p>I am proud morena girl</p>
                <p>and I'm proud of my mother</p>
                <p>Lovely</p>
            </section>
        </div>
        </div>

    </body>
</html>
<script>
    $(document).ready(function(){
        $("#hide").click(function(){
            $("p").hide();
        });
        $("#show").click(function(){
            $("p").show();
        });
    });
</script>