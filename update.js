function update(){
    var name= document.myfrm.name.value;
    var salary= document.myfrm.salary.value;
    var PhoneNumber= document.myfrm.expense.value;
    if (name=="")
        {
            alert("please enter your name");
            return false;
        }
    else if (salary=="" || isNaN(salary) || salary.length<0=="" || salary.length>7)
        {
            alert("please enter your salary")
            return false;
        }
    else if(PhoneNumber=="" || PhoneNumber.length!=10)
        {
            alert("please enter a valid Phone Number")
            return false;
        }
    else{
        alert("your name is "+name+" your salary is "+salary+" your PhoneNumber is "+PhoneNumberhone);
    }
}
