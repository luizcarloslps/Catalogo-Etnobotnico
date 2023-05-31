<!-- Sidebar -->
<div class="sidebar" id="mySidebar">
<div class="side-header">

    <h5 style="margin-top:10px;">Bem vindo (a) <?php echo $_SESSION['nome']; ?></h5>
</div>

<hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="./index.php" ><i class="fa fa-home"></i> Principal</a>
    <a href="#customers"  onclick="showCustomers()" ><i class="fa fa-users"></i> Usuários</a>
    <a href="#category"   onclick="showCategory()" ><i class="fa fa-th-large"></i> Categorias</a>
    <a href="#part"   onclick="showPart()" ><i class="fa fa-th"></i> Partes</a>
    <a href="#productpart"   onclick="showProductPart()" ><i class="fa fa-th-list"></i> Partes das plantas</a> 
    <a href="#products"   onclick="showProductItems()" ><i class="fa fa-th"></i> Plantas</a>
<!--     <a href="#orders" onclick="showOrders()"><i class="fa fa-list"></i>Ordens</a> -->
  
  <!---->
</div>
 
<div id="main">
    <button class="openbtn" onclick="openNav()"><i class="fa fa-home"></i></button>
</div>


