function get_product(id) {
    document.getElementById("product-id").value = id;
    let title = document.getElementById(id).children[0].children[1].children[0].getAttribute('data-product');
    let color = document.getElementById(id).children[0].children[1].children[1].getAttribute('data-product');
    let Description = document.getElementById(id).children[0].children[1].children[2].getAttribute('data-product');
    let quantity = document.getElementById(id).children[0].children[1].children[3].children[1].getAttribute('data-product');
    let prix = document.getElementById(id).children[0].children[1].children[4].children[0].getAttribute('data-product');
    let category = document.getElementById(id).children[0].children[1].children[5].getAttribute('data-product');

   
    document.getElementById('product-title').value = title;
    document.getElementById('product-category').value = category;
    document.getElementById('product-description').value = Description;
    document.getElementById('product-color').value = color;
    document.getElementById('product-quantity').value = quantity;
    document.getElementById('product-prix').value = prix;
    document.getElementById('')

    document.getElementById('product-update-btn').style.display = 'block';
    document.getElementById('product-delete-btn').style.display = 'block';
    document.getElementById('product-save-btn').style.display = 'none';
    


    
    $("#modal-product").modal("show");
}

function clear_product() {

    document.getElementById('product-update-btn').style.display = 'none';
    document.getElementById('product-delete-btn').style.display = 'none';
    document.getElementById('product-save-btn').style.display = 'block';
    document.getElementById('form-product').reset();


}









// $(document).ready(function(){
//     $(document).click(function(e){
//         if(!$(e.target).is("#exampleModal")){
//             // alert('iam here')
//             $.modal.close();
//         }
//     })
  
//   });

