var $ = document.querySelector.bind(document);
var $$ = document.querySelectorAll.bind(document);

var formNhap = $(".form_body form");
var addBtn = $(".form_body .add_btn");
var updateBtn = $(".form_body .update_btn");

addBtn.onclick = () => {
    var formInput = $$(".form-control");
    var count = 0;
    for(var i =0; i< formInput.length; i++){
        if(formInput[i].value == ""){
            count++;
        }
    }
    if(count != 0){
        alert("Các trường không dược để trống.");
    }
    else{
        if(isNaN(formInput[3].value)){
            alert("Giá phải là số.");
        }
        else{
            formNhap.action="Form_NhapSP.php";
        }
    }
}
