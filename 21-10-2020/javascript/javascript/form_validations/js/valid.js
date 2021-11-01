function validation() {

    // if (document.frm.img.value == "") {
    //     // alert('Please select you Image')
    //     document.getElementById("imgg").innerHTML = "Please select an Images";
    //     document.frm.img.focus();
    //     return false;
    // }


    if (document.frm.img.value == "") {
        alert('Please select you Image')
            // document.getElementById("imgg").innerHTML = "Please select an Images";
        document.frm.img.focus();
        return false;
    }



    if (document.frm.fnm.value == "") {
        alert('Please Enter Firstname')
        document.frm.fnm.focus();
        return false;
    }

    var fnmm = /^[A-Za-z]+$/;


    if (!fnmm.test(document.frm.fnm.value)) {
        alert('Please Enter Only alphabetic character in Firstname')
        document.frm.fnm.focus();
        return false;
    }



    if (document.frm.mnm.value == "") {
        alert('Please Enter MiddleName')
        document.frm.mnm.focus();
        return false;
    }

    var mnmm = /^[A-Za-z]+$/;


    if (!mnmm.test(document.frm.mnm.value)) {
        alert('Please Enter Only alphabetic character in MiddleName')
        document.frm.mnm.focus();
        return false;
    }

    if (document.frm.lnm.value == "") {
        alert('Please Enter Lastname')
        document.frm.lnm.focus();
        return false;
    }

    var lnmm = /^[A-Za-z]+$/;


    if (!lnmm.test(document.frm.lnm.value)) {
        alert('Please Enter Only alphabetic character in Lastname')
        document.frm.lnm.focus();
        return false;
    }




    if (document.frm.em.value == "") {
        alert('Please Enter Email')
        document.frm.em.focus();
        return false;
    }

    var emm = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;


    if (!emm.test(document.frm.em.value)) {
        alert('Please Enter a Valid email Address')
        document.frm.em.focus();
        return false;
    }



    if (document.frm.pass.value == "") {
        alert('Please Enter Password')
        document.frm.pass.focus();
        return false;
    }
    var pass = document.getElementById("pwd").value;
    var cpass = document.getElementById("cpwd").value;

    if (pass !== cpass) {

        alert('Your password does not matched try agian')
        document.frm.pass.focus()
        return false;

    }

    var sppass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;

    if (!sppass.test(document.frm.pass.value)) {
        alert('Please Enter OneUpper,oneLower and eight charcter with special charcter in password')
        document.frm.pass.focus();
        return false;
    }





    if (document.frm.mob.value == "") {
        alert('Please Enter Mobile')
        document.frm.mob.focus();
        return false;
    }


    var mobb = /^\d{10}$/;

    if (!mobb.test(document.frm.mob.value)) {
        alert('Please enter 10 digit of Mobile Number')
        document.frm.mob.focus();
        return false;
    }


}