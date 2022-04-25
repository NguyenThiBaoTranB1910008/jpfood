$(document).ready(function() {
    $("#booktable").submit(function(){
        var name= $(("#fullname"));
        if(name.val()==""){
            alert("Vui long nhap ten nguoi dat ban!!");
            return false;
        }
        if($('#datebook').val()==""){
            alert("Vui long nhap ngay dat ban!!");
            return false;
        }
        if($('#timebook').val()==""){
            alert("Vui long nhap thoi gian dat ban!!");
            return false;
        }
        var seatingcap = document.getElementsByName('seating');
        if(seatingcap[0].checked || seatingcap[1].checked || seatingcap[2].checked || seatingcap[3].checked){
            
        }else{
            alert("Vui lòng nhập loại bàn muốn đặt");
            return false;
        }
        return true;
    });
    
    $("#signup").validate({
        rules: {
            name:{
                required: true,
                minlength:4
            },

            phone:{
                    required:true,
                    minlength:10
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required:true,
                minlength:4
            },
            confirm_password: {
                required:true,
                equalTo: "#password"
            }
        },
        messages: {
            name:{
                required: "Bạn chưa nhập vào tên tài khoản của bạn!",
                minlength: "Tên đăng nhập phải có ít nhất 4 kí tự"
            },
            phone: {
                required:"Bạn chưa nhập vào số điện thoại!",
                minlength:"Vui lòng nhập đúng số điện thoại của bạn!"
            },
            email: {
                required:"Bạn chưa nhập vào email!",
                email: "Vui lòng nhập email hợp lệ!"
            },
            password:{
                required:"Vui lòng nhập mật khẩu!",
                minlength:"Mật khẩu phải ít nhất 4 ký tự!"
            },
            confirm_password:{
                required: "Vui lòng nhập lại mật khẩu!",
                equalTo: "Mật khẩu nhập lại không khớp!"
            }
        },
        highlight: function(element, errorClass, validClass){
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function(element, errorClass, validClass){
            $(element).addClass("is-valid").removeClass("is-invalid");
        }
    });
});