
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            <?php
              $sql = "SELECT * FROM `tblapplicants` WHERE  APPLICANTID ";
                $mydb->setQuery($sql);
                $res = $mydb->executeQuery();
                $row_count = $mydb->num_rows($res);
                $cur = $mydb->loadResultList();
              ?>
            <?php
            $totst = count($cur);
            ?>
            <h3>    
            <?php
            echo $totst ;
            ?>
            </h3>

              <p>Total Users</p>
              <div class="icon">
            <i class="fa fa-users"></i>
            </div>
            </div>
           
            
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
            <?php
              $sql = "SELECT * FROM `tbljob` WHERE  JOBID ";
                $mydb->setQuery($sql);
                $res = $mydb->executeQuery();
                $row_count = $mydb->num_rows($res);
                $cur = $mydb->loadResultList();
              ?>
            <?php
            $totst = count($cur);
            ?>
            <h3>    
            <?php
            echo $totst ;
            ?>
            </h3> 
              <p>Total Jobs</p>
            
            <div class="icon">
            <i class="fa fa-briefcase"></i>
            </div>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>  <?php
                $sql = "SELECT count(*) as 'APPL' FROM `tbljobregistration` WHERE `PENDINGAPPLICATION`=1";
                $mydb->setQuery($sql);
                $pending = $mydb->loadSingleResult();
                echo $pending->APPL;
              ?></h3>

              <p>Applicants</p>
            
            <div class="icon">
            <i class="fa fa-user"></i>
            </div>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->


          <div class="small-box bg-red">
            <div class="inner">
         
            <?php
              $sql = "SELECT * FROM `tblcompany` WHERE  COMPANYID ";
                $mydb->setQuery($sql);
                $res = $mydb->executeQuery();
                $row_count = $mydb->num_rows($res);
                $cur = $mydb->loadResultList();
              ?>
            <?php
            $totst = count($cur);
            ?>
            <h3>    
            <?php
            echo $totst ;
            ?>
            </h3>
          
              <p>Companies</p>
            
            <div class="icon">
            <i class="fa fa-building"></i>
            </div>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->

        </section>
        
   