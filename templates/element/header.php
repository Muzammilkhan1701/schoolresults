<div class=" row align-items-center container-fluid me-5">
  <div class="col-2 m ">  
    <img src="../webroot/img/springdalelogo.png" width="150px " >
    </div>
    <div class="col-10">
   <h1 style="font-size: 4rem; font-family: Cooper Black;">Sunny's Spring Dale School</h1>
  </div>
 </div>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">

    <a href="getresult.html">
      <button type="button" class="btn btn-transparent text-white border border-white mx-5 my-2">Get Result</button></a>

    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link mx-3 text-white" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-3 text-white" href="#">Admission</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-3 text-white" href="<?= $this->Url->build(['controller'=>'teachers','action'=>'login']);?>">Academics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-3 text-white" href="#">Photo Gallery</a>
        </li>
      </ul>
    </div>

    <a href="<?= $this->Url->build(['controller'=>'teachers','action'=>'login']);?>">
      <button type="button" class="btn btn-transparent text-white border border-white my-2 mx-5" >Log-In</button></a>
  </div>
</nav>
  