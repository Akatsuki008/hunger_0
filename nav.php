     <?php
      @include 'links.php';
      ?>
      <style>
  .nav-item
    {
    display: flex;
    font-size: 1.3rem;
    }
 .nav_main{
    z-index: 999;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    position: fixed;
    background-color: #FCE09B;
 }

.nav_a{
    font-family: 'Roboto Slab', serif;
      font-weight: 700;
      font-style: none;
      color: #891919;
      text-decoration: none;
      margin: 0 23px;
}

.nav_a:hover{
    color: rgb(145, 72, 90);
}

.logo_pic{
  width: 260px;
  margin: 0 auto;
}
</style>

<body>
<div class="nav_main">
        <div class=nav-item>
        <a class="nav_a" href="#Home">Home</a>
        <a class="nav_a" href="#menu">Menu</a>
        </div>
        <a class="navbar-brand" href="#">
        <img class="logo_pic" src="img/logo.png" alt="logo"></a>
        <div class=nav-item>
        <a class="nav_a" href="#contact">Subscribe</a>
        <a class="nav_a" href="./login.php">login</a>
        </div>
  </div>
</body>

