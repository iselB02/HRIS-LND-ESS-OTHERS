document.addEventListener('DOMContentLoaded', function () {
    var leave = document.getElementById('leave-form');
    var overtime = document.getElementById('overtime-form');
    var tOrder = document.getElementById('travelOrder-form');
    var OfBusiness = document.getElementById('officialBusiness-form');
    var cancel1 = document.getElementById('cancel1');
    var cancel2 = document.getElementById('cancel2');
    var cancel3 = document.getElementById('cancel3');
    var cancel4 = document.getElementById('cancel4');
    var others = document.getElementById('others');
    var otherslabel = document.getElementById('otherslabel');
    var overlay  = document.querySelector('.modal-overlay');

    function leaveOpen() {
        leave.style.display = 'block';
        overlay.style.display = 'block';
    }

    function overtimeOpen() {
        overtime.style.display = 'block';
        overlay.style.display = 'block';
    }

    function tOrderOpen() {
        tOrder.style.display = 'block';
        overlay.style.display = 'block';
    }

    function ofBusinessOpen() {
        OfBusiness.style.display = 'block';
        overlay.style.display = 'block';
    }

    function closeForm1() {
        leave.style.display = 'none';
        overlay.style.display = 'none';
    }

    function closeForm2() {
        overtime.style.display = 'none';
        overlay.style.display = 'none';
    }

    function closeForm3() {
        OfBusiness.style.display = 'none';
        overlay.style.display = 'none';
    }

    function closeForm4() {
        tOrder.style.display = 'none';
        overlay.style.display = 'none';
    }

    function othersOpen() {
        others.style.display = 'block';
        otherslabel.style.display = 'block';
    }


    cancel1.addEventListener('click', closeForm1);
    cancel2.addEventListener('click', closeForm2);
    cancel3.addEventListener('click', closeForm3);
    cancel4.addEventListener('click', closeForm4);

    // Add logic to open the modal when an announcement is clicked
    var leaveRequest = document.getElementById('leaveRequest');
    leaveRequest.addEventListener('click', leaveOpen);
    var overtimeRequest = document.getElementById('overTime');
    overtimeRequest.addEventListener('click', overtimeOpen);
    var travelOrderRequest = document.getElementById('travelOrder');
    travelOrderRequest.addEventListener('click', tOrderOpen);
    var officialBusinessRequest = document.getElementById('officialBusiness');
    officialBusinessRequest.addEventListener('click', ofBusinessOpen);
    var otherShow = document.getElementById('others_btn');
    otherShow.addEventListener('click', othersOpen);
});
