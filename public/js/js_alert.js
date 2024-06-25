function Alert(messsage){
    $.confirm({
        title: '<i class="fas fa-rocket"></i> Thông báo!',
        content: messsage,
        type: 'purple',
        autoClose: 'canceAction|5000',
        buttons: {
            caneAction:{
                text:'Đóng',
                btnClass: 'btn-blue'
            }
        }
    });
}