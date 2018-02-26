<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $(".b1").click(function(){
        $(".b1").addClass("active");
       //  $(".b2").removeClass("active");
       //  $(".b3").removeClass("active");
       //  $(".b4").removeClass("active");
       //  $(".b5").removeClass("active");
       //  $(".b6").removeClass("active");
       // $(".b7").removeClass("active");
});
        $(".b2").click(function(){
        $(".b2").addClass("active");
       //  $(".b1").removeClass("active");
       //  $(".b3").removeClass("active");
       //  $(".b4").removeClass("active");
       //  $(".b5").removeClass("active");
       //  $(".b6").removeClass("active");
       // $(".b7").removeClass("active");
});
        $(".b3").click(function(){
        $(".b3").addClass("active");
       //  $(".b1").removeClass("active");
       //  $(".b2").removeClass("active");
       //  $(".b4").removeClass("active");
       //  $(".b5").removeClass("active");
       //  $(".b6").removeClass("active");
       // $(".b7").removeClass("active");
});
        $(".b4").click(function(){
        $(".b4").addClass("active");
       //  $(".b1").removeClass("active");
       //  $(".b2").removeClass("active");
       //  $(".b3").removeClass("active");
       //  $(".b5").removeClass("active");
       //  $(".b6").removeClass("active");
       // $(".b7").removeClass("active");
});
        $(".b5").click(function(){
        $(".b5").addClass("active");
       //  $(".b1").removeClass("active");
       //  $(".b2").removeClass("active");
       //  $(".b3").removeClass("active");
       //  $(".b4").removeClass("active");
       //  $(".b6").removeClass("active");
       // $(".b7").removeClass("active");
});
        $(".b6").click(function(){
        $(".b6").addClass("active");
       //  $(".b1").removeClass("active");
       //  $(".b2").removeClass("active");
       //  $(".b3").removeClass("active");
       //  $(".b4").removeClass("active");
       //  $(".b5").removeClass("active");
       // $(".b7").removeClass("active");
});
        $(".b7").click(function(){
        $(".b7").addClass("active");
       //  $(".b1").removeClass("active");
       //  $(".b2").removeClass("active");
       //  $(".b3").removeClass("active");
       //  $(".b4").removeClass("active");
       //  $(".b5").removeClass("active");
       // $(".b6").removeClass("active");
});
    })
</script>

<!-- <style>
   a.link{
        color:white; 
    }
    a.hover{
        color: black;
    }
    a.active{
        color: red;
    }
</style> -->

<div class="wrapper">

    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the activero button using the data-active-color="primary | info | success | warning | danger"
    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <img src="img/billing.system.png" width="200px" height="40px;">
            </div>
            <?php if (Auth::guard('admin')->check()):?>
             
            <ul class="nav">
                <li class="b1">
                    <a href="ho" >

                        <i class="ti-control-skip-forward"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="b2">
                    <a href="clst">

                        <i class="ti-control-skip-forward"></i>
                        <p>Class</p>
                    </a>
                </li>
                <li class="b3">
                    <a href="mon">

                        <i class="ti-control-skip-forward"></i>
                        <p>Student</p>
                    </a>
                </li>
                <li class="b4">
                    <a href="ad">

                        <i class="ti-control-skip-forward"></i>
                        <p>Admission Fees</p>
                    </a>
                </li>
               
               
                
                <li class="b6">
                    <a href="view_s">
                    
                        <i class="ti-control-skip-forward"></i>    
                        <p>View Student</p>
                    </a>
                </li>
                <li class="b7">
                    <a href="security" >
                        <i class="ti-control-skip-forward"></i>
                        <p>Add Security</p>
                    </a>
                </li>
     
                <li class="b7">
                    <a href="logss" >
                        <i class="ti-control-skip-forward"></i>
                        <p>Student Logs</p>
                    </a>
                </li>
                <li class="b7">
                    <a href="fees" >
                        <i class="ti-control-skip-forward"></i>
                        <p>View Fees</p>
                    </a>
                </li>
              
              </ul>
              <?php else :?>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"> Online School Billing System</a>
                
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                      <h1 class="btn btn-danger"  style="margin-top:24px; font-size:12px;"><a href="#">LOGOUT</a></h1>
                    </ul>
                  
                </div>
            </div>
        </nav>
<?php endif?>

