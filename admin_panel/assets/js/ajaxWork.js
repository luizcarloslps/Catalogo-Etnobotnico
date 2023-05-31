

function showProductItems(){  
    $.ajax({
        url:"./adminView/viewAllProducts.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showCategory(){  
    $.ajax({
        url:"./adminView/viewCategories.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showPart(){  
    $.ajax({
        url:"./adminView/viewPart.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showProductPart(){  
    $.ajax({
        url:"./adminView/viewProductPart.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showCustomers(){
    $.ajax({
        url:"./adminView/viewCustomers.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showOrders(){
    $.ajax({
        url:"./adminView/viewAllOrders.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function ChangeOrderStatus(id){
    $.ajax({
       url:"./controller/updateOrderStatus.php",
       method:"post",
       data:{record:id},
       success:function(data){
           alert('Order Status updated successfully');
           $('form').trigger('reset');
           showOrders();
       }
   });
}

function ChangePay(id){
    $.ajax({
       url:"./controller/updatePayStatus.php",
       method:"post",
       data:{record:id},
       success:function(data){
           alert('Payment Status updated successfully');
           $('form').trigger('reset');
           showOrders();
       }
   });
}


//add product data
function addItems(){
    var p_name=$('#p_name').val();
    var p_name_vulgar=$('#p_name_vulgar').val();
    var p_part=$('#p_part').val();
    var p_local=$('#p_local').val();
    var p_entrevs=$('#p_entrevs').val();
    var p_idade=$('#p_idade').val();
    var p_desc=$('#p_desc').val();
    var category=$('#category').val();
    var upload=$('#upload').val();
    var file=$('#file')[0].files[0];

    var fd = new FormData();
    fd.append('p_name', p_name);
    fd.append('p_name_vulgar', p_name_vulgar);
    fd.append('p_part', p_part);
    fd.append('p_local', p_local);
    fd.append('p_entrevs', p_entrevs);
    fd.append('p_idade', p_idade);
    fd.append('p_desc', p_desc);
    fd.append('category', category);
    fd.append('file', file);
    fd.append('upload', upload);
    $.ajax({
        url:"../controller/addItemController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            alert('Cadastrado com sucesso!');
            $('form').trigger('reset');
            showProductItems();
        }
    });
}

//edit product data
function itemEditForm(id){
    $.ajax({
        url:"./adminView/editItemForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
//edit product data
function customerEditForm(id){
    $.ajax({
        url:"./adminView/editCustomerForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//update product after submit
function updateItems(){

    var product_id = $('#product_id').val();
    var p_name = $('#p_name').val();
    var p_name_vulgar=$('#p_name_vulgar').val();
    var p_part=$('#p_part').val();
    var p_local=$('#p_local').val();
    var p_entrevs=$('#p_entrevs').val();
    var p_idade=$('#p_idade').val();
    var p_desc = $('#p_desc').val();
    var category = $('#category').val();
    var existingImage = $('#existingImage').val();
    var newImage = $('#newImage')[0].files[0];
    var fd = new FormData();
    fd.append('product_id', product_id);
    fd.append('p_name', p_name);
    fd.append('p_name_vulgar', p_name_vulgar);
    fd.append('p_part', p_part);
    fd.append('p_local', p_local);
    fd.append('p_entrevs', p_entrevs);
    fd.append('p_idade', p_idade);
    fd.append('p_desc', p_desc);
    fd.append('category', category);
    fd.append('existingImage', existingImage);
    fd.append('newImage', newImage);
   
    $.ajax({
      url:'./controller/updateItemController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Atualizado com sucesso!.');
        $('form').trigger('reset');
        showProductItems();
      }
    });
}

//update user after submit
function updateCustomers(){
    var id = $('#id').val();
    var nome = $('#nome').val();
    var tipo = $('#tipo').val();
    var sala = $('#sala').val();
    var idade = $('#idade').val();
    var email = $('#email').val();
    var senha = $('#senha').val();
    var fd = new FormData();
    fd.append('id', id);
    fd.append('nome', nome);
    fd.append('tipo', tipo);
    fd.append('sala', sala);
    fd.append('idade', idade);
    fd.append('email', email);
    fd.append('senha', senha);
   
    $.ajax({
      url:'./controller/updateItemController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Atualizado com sucesso!.');
        $('form').trigger('reset');
        showProductItems();
      }
    });
}

//delete product data
function itemDelete(id){
    $.ajax({
        url:"./controller/deleteItemController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Item deletado com sucesso!!');
            $('form').trigger('reset');
            showProductItems();
        }
    });
}
function customerDelete(id){
    $.ajax({
        url:"./controller/deleteCustomerController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Usuário deletado com sucesso');
            $('form').trigger('reset');
            showProductItems();
        }
    });
}


//delete cart data
function cartDelete(id){
    $.ajax({
        url:"./controller/deleteCartController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Cart Item Successfully deleted');
            $('form').trigger('reset');
            showMyCart();
        }
    });
}

function viewEachForm(id){
    $.ajax({
        url:"./adminView/viewEachOrder.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}



//delete category data
function categoryDelete(id){
    $.ajax({
        url:"./controller/catDeleteController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Categoria deletada com sucesso');
            $('form').trigger('reset');
            showCategory();
        }
    });
}

//delete size data
function partDelete(id){
    $.ajax({
        url:"./controller/deletePartController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('parte deletada');
            $('form').trigger('reset');
            showPart();
        }
    });
}


//delete variation data
function variationDelete(id){
    $.ajax({
        url:"./controller/deleteVariationController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Deletado com sucesso');
            $('form').trigger('reset');
            showProductPart();
        }
    });
}

//edit variation data
function variationEditForm(id){
    $.ajax({
        url:"./adminView/editVariationForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//edit variation data
function partEditForm(id){
    $.ajax({
        url:"./adminView/editPartForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}


//update variation after submit
function updateVariations(){
    var v_id = $('#v_id').val();
    var product = $('#product').val();
    var part = $('#part').val();
    var qty = $('#qty').val();
    var fd = new FormData();
    fd.append('v_id', v_id);
    fd.append('product', product);
    fd.append('part', part);
    fd.append('qty', qty);
   
    $.ajax({
      url:'./controller/updateVariationController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Atualizado com sucesso.');
        $('form').trigger('reset');
        showProductPart();
      }
    });
}
function search(id){
    $.ajax({
        url:"./controller/searchController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.eachCategoryProducts').html(data);
        }
    });
}


function quantityPlus(id){ 
    $.ajax({
        url:"./controller/addQuantityController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('form').trigger('reset');
            showMyCart();
        }
    });
}
function quantityMinus(id){
    $.ajax({
        url:"./controller/subQuantityController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('form').trigger('reset');
            showMyCart();
        }
    });
}

function checkout(){
    $.ajax({
        url:"./adminView/viewCheckout.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}


function removeFromWish(id){
    $.ajax({
        url:"./controller/removeFromWishlist.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Removido da lista');
        }
    });
}


function addToWish(id){
    $.ajax({
        url:"./controller/addToWishlist.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Adicionado na lista');        
        }
    });
}